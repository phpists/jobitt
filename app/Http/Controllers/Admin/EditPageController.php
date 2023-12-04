<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EditPage;
use App\Services\LinkTransformService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditPageController extends Controller
{
    public function index() {
        $pages = EditPage::query()->get();
        return view('admin.pages.index', compact('pages'));
    }
    public function edit(Request $request, $id) {
        $page_content = EditPage::query()->findOrFail($id);
        $jobs = json_decode(Storage::disk('local')->get('roles.json'), true);
        return view('admin.pages.edit', compact('page_content', 'jobs'));
    }
    public function store(Request $request) {
        $data = $request->validate([
            'route_name' => ['required', 'string', 'unique:edit_pages,route_name'],
            'content' => ['required', 'string'],
            'description' => ['required', 'string'],
            'additional_content' => ['nullable', 'string'],
            'h1' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);

        foreach ($data as $key=>$value) {
            $data[$key] = str_replace('</p>', '', str_replace('<p>', '', $value));
        }
        $page = new EditPage($data);
        if ($page->save()) {
            return redirect()->route('admin.pages.index')->with('success', 'Page create successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function create() {
        $jobs = json_decode(Storage::disk('local')->get('roles.json'), true);
        return view('admin.pages.create', compact('jobs'));
    }

    public function update(Request $request) {
        $data = $request->validate([
            'content' => ['required', 'string'],
            'description' => ['required', 'string'],
            'additional_content' => ['nullable', 'string'],
            'h1' => ['required', 'string'],
            'title' => ['required', 'string']
        ]);
        foreach ($data as $key=>$value) {
            $data[$key] = str_replace('</p>', '', str_replace('<p>', '', $value));
        }
        EditPage::query()->where('id', $request->id)->update(
            $data
        );
        return redirect()->back()->with('success', 'Data successfully updated');
    }

    public function delete(Request $request, $id) {
        $page_content = EditPage::query()->findOrFail($id);
        if (in_array($page_content->route_name, [EditPage::DEFAULT_PAGE, EditPage::EMPTY_RESULT_PAGE, EditPage::MAIN_PAGE])) {
            return redirect()->back()->with('error', 'Default page cannot be deleted');
        }
        $page_content->delete();
        return redirect()->back()->with('success', 'Page successfully deleted');
    }
}
