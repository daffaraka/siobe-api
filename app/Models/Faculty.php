<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Faculty extends Model
{
    use HasApiTokens,HasFactory;

    protected $fillable = ['name'];

    public $timestamps = false;

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function studyPrograms()
    {
        return $this->hasMany(StudyProgram::class);
    }
}
