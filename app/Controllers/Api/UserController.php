<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Hello extends ResourceController
{
    public function index()
    {
        return $this->respond([
            'name'      => "Gielo Bandoy",
            'email' => 'gmarbandoy@gmail.com',
            'age' => 22,
            'time'    => date('c')
        ]);
    }
}
