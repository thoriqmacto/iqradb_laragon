<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LoopModel;

class Loops extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        // Pagination parameters
        $limit = $this->request->getVar('limit') ?? 10; // Default limit
        $page = $this->request->getVar('page') ?? 1; // Default page
        $offset = ($page - 1) * $limit;
        
        $model = new LoopModel();
        $data = $model->findAll($limit, $offset);
        return $this->respond($data);
    }

    public function show($id = null)
    {        
        $model = new LoopModel();
        $data = $model->find(['id' => $id]);
        if(!$data) return $this->failNotFound('No Data Found');
        return $this->respond($data[0]);
    }

    public function create()
    {
        helper(['form']);
        $rules = [
            'loop_name' => 'required',
            'loop_func' => 'required',
        ];
        $data = [
            'loop_name' => $this->request->getVar('loop_name'),
            'loop_func' => $this->request->getVar('loop_func')
        ];
        if(!this->validate($rules)) return $this->fail($this->validator->getErrors());
        
        $model = new LoopModel();
        $model->save($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data Inserted'
            ]
        ];
        return $this->respond($response);
    }

    public function update($id = null)
    {
        helper(['form']);
        $rules = [
            'loop_name' => 'required',
            'loop_func' => 'required',
        ];
        $data = [
            'loop_name' => $this->request->getVar('loop_name'),
            'loop_func' => $this->request->getVar('loop_func')
        ];
        if(!this->validate($rules)) return $this->fail($this->validator->getErrors());
        
        $model = new LoopModel();
        $findById = $model->find(['id' => $id]);
        if(!$findById) return $this->failNotFound('No Data Found');
        $model->update($id, $data);        
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {        
        $model = new LoopModel();
        $findById = $model->find(['id' => $id]);
        if(!$findById) return $this->failNotFound('No Data Found');
        $model->delete($id);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data Deleted'
            ]
        ];
        return $this->respond($response);
    }
}