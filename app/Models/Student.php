<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=['name','age','speciality'];

    public function Post()
    {
        #return with the posts of the student
        #this refers to the user
        return $this->hasMany(Post::class);
    }
}
