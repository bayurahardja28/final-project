<?php

namespace App\Listeners;


use App\Events\StatusChanged;
use App\Models\StatusLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogStatusChange
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StatusChanged $event)
    {
        StatusLog::create([
            'transaksi_id' => $event->transaksi->id,
            'status' => $event->transaksi->status,
            'changed_at' => now(),
        ]);
    }
}
