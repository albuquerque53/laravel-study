<?php

/**
 * 
 *  POST MODEL
 *  for: 'posts' table
 *  created with: php artisan make:model Post
 * 
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // Name of the table in DB
    protected $table = 'posts';

    // To not use timestamps in DB (created_at, updated_at)
    public $timestamps = false;

    /* The fillable way (need the 'create' method in controller)
    protected $fillable = [
        'title',    // Set title
        'subtitle', //Set subtitle
        'content'   // Set content
    ];
    */

    // This will run automatically when title is set
    public function setTitleAttribute($value)
    {
        // Default
        $this->attributes['title'] = $value;
        // Slug autoset with title value    
        $this->attributes['slug'] = Str::slug($value);
    }
}
