<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'bio',

    ];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
