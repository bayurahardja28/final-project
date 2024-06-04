<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\HttpResponses;

class ServiceController extends Controller
{
    use HttpResponses;

    public function getAllServices()
    {
        // Logic to retrieve all services from the database
        // For example:
        $services = Service::all();

     
        return $this->success($services);
    }
}