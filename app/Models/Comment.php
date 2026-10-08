<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comment';

    protected $fillable = ['author', 'content', 'post_id']; // has an foreign key to the posts table

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);  // each comment belongs to a post
    }
}
