<?php

namespace App\Livewire\Customer;

use App\Models\customer;
use Livewire\Component;


class Index extends Component
{
    public $search;

    protected $listeners = ['reload' => '$refresh'];

    public $no = 1;

    public function render()
    {
        return view('livewire.customer.index', [
            'customers'  => customer::when($this->search, function($service){
                $service->where('name', 'like', '%'.$this->search.'%');
            })->get()
        ]);
       
    }
}
