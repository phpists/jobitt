<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditPage extends Model
{
    use HasFactory;

    const DEFAULT_PAGE = 'default';

    const EMPTY_RESULT_PAGE = 'Empty results page';

    const START_PAGE = 'Start(index) page';

    protected $fillable = ['title', 'h1', 'description', 'content', 'additional_content', 'route_name'];

    public $timestamps = false;
}
