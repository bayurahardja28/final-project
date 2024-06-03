<?php

namespace App\Livewire\Transaksi;

use App\Livewire\Forms\TransaksiForm;
use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Component;

class Detail extends Component
{
    public $show = false;
    // public TransaksiForm $form;
    public ?Transaksi $transaksi;

    #[On('detailTransaksi')]
    public function detailTransaksi(Transaksi $transaksi)
    {
        $this->transaksi = $transaksi;
        $this->show = true;
    }
    public function closeModal()
    {
        $this->show = false;
    }
    public function render()
    {
        return view('livewire.transaksi.detail');
    }
}
