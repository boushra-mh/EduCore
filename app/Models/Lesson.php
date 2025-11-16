<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'content',
        'course_id',
        'duration',
        'is_published',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
