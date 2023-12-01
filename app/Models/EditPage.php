<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditPage extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'h1', 'description', 'content', 'additional_content', 'route_name'];

    public $timestamps = false;
}
