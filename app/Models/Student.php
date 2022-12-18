<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['lname','fname', 'course', 'year', 'gender', 'address'];

    public function borrows() {
        return $this->hasMany('App\Models\Borrow', 'stud_id');
    }
}
