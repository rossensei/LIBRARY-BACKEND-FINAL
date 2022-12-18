<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = ['stud_id','book_id', 'taken_date', 'return_date'];

    public function student() {
        return $this->belongsTo('App\Models\Student', 'stud_id');
    }
    public function book() {
        return $this->belongsTo('App\Models\Book', 'book_id');
    }
}
