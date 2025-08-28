<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'slug', 'user_id'];

    protected static function booted()
    {
        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
