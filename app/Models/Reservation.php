<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'book_id', 'reserved_at', 'expires_at', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    protected $casts = [
    'reserved_at' => 'datetime',
    'approved_at' => 'datetime',
];
}
