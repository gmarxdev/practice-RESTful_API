<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        return $this->respond([
            'Name' => "Gielo Bandoy",
            'Age' => 22,
            'time' => date('c')
        ]);
    }
}
