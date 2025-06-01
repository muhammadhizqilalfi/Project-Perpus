<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Reservation;
use App\Models\Fine;
use Illuminate\Support\Facades\Auth;
use App\Models\Borrowing;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Book::paginate(9);
        return view('library.catalog', compact('books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $books = Book::where('title', 'like', "%$query%")
                     ->orWhere('author', 'like', "%$query%")
                     ->paginate(9);
        return view('library.catalog', compact('books', 'query'));
    }

    public function reserve(Book $book)
    {
        if ($book->available_copies < 1) {
            return back()->with('error', 'Buku tidak tersedia');
        }

        Reservation::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
            'reserved_at' => now(),
            'status' => 'pending',
        ]);

        $book->decrement('available_copies');

        return back()->with('success', 'Reservasi berhasil dilakukan.');
    }

    public function reservations()
    {
        $reservations = Reservation::with('book')
            ->where('user_id', Auth::id())
            ->orderByDesc('reserved_at')
            ->get();

        return view('library.reservations', compact('reservations'));
    }

public function cancelReservation($id)
{
    $reservation = Reservation::findOrFail($id);

    // Validasi agar user tidak bisa membatalkan reservasi orang lain
    if ($reservation->user_id !== Auth::id()) {
        abort(403, 'Tidak diizinkan membatalkan reservasi ini.');
    }

    // Hanya bisa membatalkan jika status masih pending
    if ($reservation->status === 'pending') {
        $reservation->delete();
        return back()->with('success', 'Reservasi berhasil dibatalkan.');
    }

    return back()->with('error', 'Reservasi tidak dapat dibatalkan.');
}

public function fines()
{
    $fines = Fine::where('user_id', Auth::id())->get();

    return view('library.fines', compact('fines'));
}

public function borrowings()
{
    $borrowings = Borrowing::with('book')
        ->where('user_id', Auth::id())
        ->orderByDesc('borrowed_at')
        ->get();

    return view('library.borrowings', compact('borrowings'));
}

}


