<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Detail Transaksi</h3>
            <div class="py-4 space-y-4">
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Tangggal Transaksi</div>
                    <div>{{ $transaksi?->created_at->format('d F Y H:i') }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Nama Customer</div>
                    <div>{{ $transaksi?->customer?->name ?? '-' }}</div>
                </div>
                <div class="flex flex-col">
                    <div class="text-sm opacity-50">Total Bayar</div>
                    <div>Rp{{ Number::format($transaksi?->price ?? 0) }}</div>
                </div>
            </div>
            <div class="table-wraper">
                <table class="table">
                    <thead>
                        <th>Nama Service</th>
                        <th>Qty</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        @foreach (json_decode($transaksi?->items, true) ?? [] as $key => $item)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $item['qty'] }} @if (isset($item['unit']))
                                        {{ $item['unit'] }}
                                    @endif
                                </td>
                                <td>{{ Number::format($item['price']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-action">
                <button type="button" wire:click="closeModal" class="btn btn-ghost">Close!</button>
            </div>
        </div>
    </div>
</div>
