<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $table = 'evidence';
    protected $fillable = ['student_id', 'url', 'description'];

    //an evidence submission belongs to a student 
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
