<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //\

    use HasUuids;
    use HasFactory;

    protected $primaryKey = 'id'; // Specify the primary key if it's not 'id'

    protected $keyType = 'string'; // UUID primary key type   

    public $incrementing =false; 


    protected $table = "post"; // Specify the table name if it doesn't follow Laravel's naming convention


    protected $fillable = [
        'title',
        'content',
        'author',
    ]; // Allow mass assignment for these fields

    protected $guarded = [
        'id',
    ]; // Prevent mass assignment for these fields (read-only)

    public function comments()
    {
        return $this->hasMany(Comment::class); // Each post can have many comments
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class ,'tags_posts'); // Each post can have many tags
    }

    
}
