<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Hello extends ResourceController
{
    public function index()
    {
        return $this->respond([
            'ok'      => true,
            'message' => 'Hello from CodeIgniter 4 API!',
            'time'    => date('c')
        ]);
    }
}
