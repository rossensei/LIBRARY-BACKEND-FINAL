<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function index() {
        $recents = Borrow::orderBy('created_at','DESC')
            ->with(['student', 'book'])->get();

        return response()->json([
            'recent'=> $recents
        ]);
    }

    // public function index() {
    //     return response()->json([
    //         'books' => Book::orderBy('id')->get()
    //     ]);
    // }

    public function show(Borrow $borrow) {
        return response()->json($borrow);
    }

    public function update(Borrow $borrow, Request $request) {
        $borrow->update($request->all());
        return response()->json($borrow);
    }

    public function store(Request $request) {
        $request->validate([
            'stud_id' => 'numeric|required',
            'book_id' => 'numeric|required',
            'taken_date' => 'required|date_format:Y-m-d',
            'return_date' => 'required|date_format:Y-m-d',
        ]);

        $borrow = Borrow::create($request->all());
        return response()->json($borrow);
    }

    public function destroy(Borrow $borrow) {
        $borrow->delete();
        return response()->json(['message'=>'This record has been deleted.']);
    }

}
