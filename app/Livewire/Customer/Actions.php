<?php

namespace App\Livewire\Customer;

use App\Livewire\Forms\CustomerForm;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\On;

use Livewire\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;

    public $photo;

    public $show = false;
    
    public ?User $user = null;
    
    public CustomerForm $form;

    #[On('createCustomer')]

    public function createCustomer()
    {
        $this->show = true;
    }

    #[On('editCustomer')]

    public function editCustomer(Customer $customer)
    {   
        // dd($service);

        $this->form->setCustomer($customer);
        // dd($this->form);
        $this->show = true;
        $this->dispatch('reload');

    }
    #[On('deletService')]

    public function deletService(Customer $customer)
    {   
        $customer->delete();
        $this->dispatch('reload');

    }
    public function simpan()
{
    // Validate the form data
    $this->validate([
        'form.name' => 'required',
        'form.contact' => 'required',
        'form.user_email' => 'required|email'
       
    ]);
    if ($this->form->user_id === null) {
        $this->form->store();
    } else {
        $this->form->update();
    }
    // Update the customer
 
 

    $this->closeModal();
    $this->dispatch('reload');
}
    public function closeModal()
    {
        $this->show = false;
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.customer.actions');
    }
}
