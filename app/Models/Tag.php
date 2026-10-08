<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "tags"; // Specify the table name if it doesn't follow Laravel's naming convention


    protected $fillable = [
        'title',
    ]; // Allow mass assignment for these fields

    protected $guarded = [
        'id',
    ]; // Prevent mass assignment for these fields (read-only)

    public function posts(){
        return $this->belongsToMany(Post::class,'tags_posts');
    }
}
