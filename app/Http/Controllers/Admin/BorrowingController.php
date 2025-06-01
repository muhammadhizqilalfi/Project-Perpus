<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Borrowing;
use App\Models\Book;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil reservasi dengan status approved sebagai riwayat peminjaman
        $borrowings = Reservation::with(['book', 'user'])
            ->where('status', 'approved')
            ->paginate(10);

        return view('admin.borrowings.index', compact('borrowings'));
    }

    public function exportPdf()
    {
        $reservations = Reservation::with(['user', 'book'])
        ->orderByDesc('reserved_at')
        ->get();

        return Pdf::loadView('admin.borrowings.pdf', compact('reservations'))
        ->download('riwayat_reservasi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
