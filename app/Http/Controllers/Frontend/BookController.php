<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::paginate(10);
        return view('frontend.book.index', [
            'title' => 'Library',
            'books' => $book,
        ]);
    }
    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'title' => $book->title,
            'book' => $book,

        ]);
    }
    public function borrow(Request $request, Book $book)
    {
        // BorrowHistory::create([
        //     'user_id' => auth()->id(),
        //     'book_id' => $book->id
        // ]);
        $user = $request->user();
        if ($user->borrow()->IsStillBorrow($book->id)) {
            return redirect()->back()->with('toast', 'anda sudah meminjam buku dengan judul ' . $book->title);
        }
        $user->borrow()->attach($book);
        $book->decrement('qty');
        return redirect()->back()->with('toast', 'Berhasil Meminjam buku' . $book->title);
    }
}
