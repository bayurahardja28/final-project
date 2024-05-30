<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Attributes\Validate;   
use Livewire\Form;

class SeriviceForm extends Form
{
    public $name;
    public $description;
    public $price;
    public $estimated_completion_time;
    public $photo;
    
    public ?Service $service;

    public function setService(Service $service)
    {
        $this->service = $service;
        
        $this->name = $service->name;
        $this->description = $service->description;
        $this->price = $service->price;
        $this->estimated_completion_time = $service->estimated_completion_time;
        $this->photo = $service->photo;
    }
    public function store(){
        $validate= $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'estimated_completion_time' => 'required',
            
        ]);
        if($this->photo){
            $validate['photo'] = $this->photo;
        }

        Service::create($validate);
        $this->reset();
    }
    public function update(){
        $validate= $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'estimated_completion_time' => 'required',
        ]);
        if($this->photo){
            $validate['photo'] = $this->photo;
        }

        $this->service->update($validate);
        $this->reset();
    }
}
