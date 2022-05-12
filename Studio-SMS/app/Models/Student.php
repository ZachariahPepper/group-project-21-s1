<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['first_name', 'last_name', 'student_id', 'github'];

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
    //a student has many evidence submissions 
    public function studentEvidence()
    {
        return $this->hasMany(Evidence::class);
    }
}
