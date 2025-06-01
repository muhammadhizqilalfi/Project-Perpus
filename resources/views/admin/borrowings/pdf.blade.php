<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Riwayat Reservasi</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; font-size: 12px; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Riwayat Reservasi Buku</h2>

    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Reservasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reservations as $r)
                <tr>
                    <td>{{ $r->user->name ?? '-' }}</td>
                    <td>{{ $r->book->title ?? '-' }}</td>
                    <td>{{ \Carbon\Carbon::parse($r->reserved_at)->format('d M Y') }}</td>
                    <td>{{ ucfirst($r->status) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada data reservasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
