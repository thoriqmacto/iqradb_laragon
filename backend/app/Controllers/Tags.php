<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\TagModel;

class Tags extends ResourceController
{
    use ResponseTrait;
    
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */    
    public function index()
    {
        // Pagination parameters
        $limit = $this->request->getVar('limit') ?? 10; // Default limit
        $page = $this->request->getVar('page') ?? 1; // Default page
        $offset = ($page - 1) * $limit;

        $model = new TagModel();
        $data = $model->findAll($limit, $offset);
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new TagModel();
        $data = $model->find(['id' => $id]);
        if(!$data) return $this->failNotFound('No Data Found');
        return $this->respond($data[0]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper(['form']);
        $rules = [
            'tag_number' => 'required',
            'tag_instrument_type' => 'required',
        ];
        $data = [
            'tag_number' => $this->request->getVar('tag_number'),
            'tag_instrument_type' => $this->request->getVar('tag_instrument_type')
        ];
        if(!this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new TagModel();
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

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        helper(['form']);
        $rules = [
            'tag_number' => 'required',
            'tag_instrument_type' => 'required',
        ];
        $data = [
            'tag_number' => $this->request->getVar('tag_number'),
            'tag_instrument_type' => $this->request->getVar('tag_instrument_type')
        ];
        if(!this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new TagModel();
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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new TagModel();
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
