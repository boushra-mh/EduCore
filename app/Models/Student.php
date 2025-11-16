<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'enrollment_date',
    ];
    public function courses()
    {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id');
    }

}
