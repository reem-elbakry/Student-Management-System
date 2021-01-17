<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable=['title','body','student_id	'];

    public function student()
    {
        #return with the owner of the post
        return $this->belongsTo(Student::class,'student_id');
    }
}
