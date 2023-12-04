@extends('admin.layouts.app')
@section('content')
    <style>
        .variable-list {
            position: absolute;
            background: #0e6662;
        }
        .variable-option {
            color: white;
            padding: 10px 20px 10px 20px;
            cursor: pointer;
        }
        /*.variable-option:first-child {*/
        /*    padding-top: 20px;*/
        /*}*/
        .variable-option:hover {
            background: #15b0a9;
        }
        .position-option {
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="card card-custom">
            <div class="card-header">
                <h1 class="card-title">Create page</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.pages.store')}}" id="editPageForm" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Select job position</label>
                                <select class="form-control" name="route_name" required id="">
                                    <option class="position-option" value="{{\App\Models\EditPage::DEFAULT_PAGE}}">Default page</option>
                                    @foreach($jobs as $job=>$technologies)
                                        <option class="position-option" value="{{$job}}">{{$job}}</option>
                                        @foreach($technologies as $technology)
                                            <option value="{{$technology}}">{{$technology}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Title</label>
                                <textarea required name="title" id="title"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>H1 tag</label>
                                <textarea required name="h1" id="h1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea required name="content" id="content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Additional Content</label>
                                <textarea name="additional_content" id="additional_content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Meta description</label>
                                <textarea name="description" id="description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
    <script src="{{ asset('super_admin/ckeditor/ckeditor.js') }} "></script>
    <script>
        let titleEditor = CKEDITOR.replace( 'title' );
        titleEditor.on('required', (evt) => {
            titleEditor.showNotification( 'This field is required.', 'warning' );
            titleEditor.element.$.parentNode.scrollIntoView()
            evt.cancel();
        })
        let h1Editor = CKEDITOR.replace( 'h1' );
        h1Editor.on('required', (evt) => {
            h1Editor.showNotification( 'This field is required.', 'warning' );
            h1Editor.element.$.parentNode.scrollIntoView()
            evt.cancel();
        })
        let contentEditor = CKEDITOR.replace( 'content' );
        contentEditor.on('required', (evt) => {
            contentEditor.showNotification( 'This field is required.', 'warning' );
            contentEditor.element.$.parentNode.scrollIntoView()
            evt.cancel();
        })
        let addContent = CKEDITOR.replace( 'additional_content' );
        let descEditor = CKEDITOR.replace( 'description' );
        descEditor.on('required', (evt) => {
            descEditor.showNotification( 'This field is required.', 'warning' );
            descEditor.element.$.parentNode.scrollIntoView()
            evt.cancel();
        })
    </script>
@endsection
