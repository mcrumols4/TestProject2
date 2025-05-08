<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;

    protected $fillable = ['slug', 'title', 'subtitle', 'content', 'category_id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
