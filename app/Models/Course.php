<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
       protected $fillable = [
        'title',
        'description',
        'duration',
        'teacher_id',
        'category_id',
'level',
'price',
'is_published',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id');
    }

}
