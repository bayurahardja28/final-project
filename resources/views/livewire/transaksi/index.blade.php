<div class="page-wrapper">
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                    <tr>
                        <td></td>
                        <td>{{ $transaksi->created_at->diffForHumans() }}</td>
                        <td>{{ $transaksi->description }}</td>
                        <td>{{ $transaksi->customer->name }}</td>
                        <td>{{ $transaksi->status }}</td>
                        <td></td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</div>