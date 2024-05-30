<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'photo', 'description', 'price', 'estimated_completion_time'];

    

    public function getHargaAttribute()
    {
        return 'Rp. ' .  Number::format($this->price);
    }
    public function getFotoAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('noimage.png');
    }

}
