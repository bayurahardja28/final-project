<div>
    @foreach ($transaksis as $transaksi)
        <p>{{ $transaksi->description }}</p>
        <p>{{ $transaksi->price }}</p>
        <!-- Print other properties of the transaction -->
    @endforeach
</div>