<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    protected $modelName = 'App\Models\UserModel'; // Attach your model
    protected $format    = 'json';                 // Default response is JSON

    // GET /api/users
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // GET /api/users/{id}
    public function show($id = null)
    {
        $user = $this->model->find($id);
        return $user
            ? $this->respond($user)
            : $this->failNotFound('User not found');
    }

    // POST /api/users
    public function create()
    {
        $data = $this->request->getJSON(true);

        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        }
        return $this->fail('Failed to create user');
    }

    // PUT/PATCH /api/users/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        if ($this->model->update($id, $data)) {
            return $this->respond(['status' => 'updated']);
        }
        return $this->fail('Failed to update user');
    }

    // DELETE /api/users/{id}
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }
        return $this->fail('Failed to delete user');
    }
}
