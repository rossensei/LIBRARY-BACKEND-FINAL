<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name','pagecount', 'auth_name', 'type'];

    public function borrows() {
        return $this->hasMany('App\Models\Borrow', 'book_id');
    }
}
