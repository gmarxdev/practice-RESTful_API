<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    public function index()
    {
        return $this->respond([
            'name'      => "Gielo Mar",
            'email'     => 'gmarbandoy@gmail.com',
            'age'       => 22,
            'time'      => date('c')
        ]);
    }
}
