<?php

namespace App\Models;

use CodeIgniter\Model;

class LoopModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'loops';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'loop_name',
        'loop_desc',
        'loop_func',
        'loop_func_desc',
        'loop_type',
        'loop_location',
        'loop_dwg_doc',
        'loop_ready_status',
        'loop_ready_date',
        'loop_test_status',
        'loop_test_plan',
        'loop_test_actual',
        'form_id',
        'form_number',
        'cms_system_id',
        'cms_system_number',
        'cms_system_mc_plan',
        'cms_system_mc_actual',
        'cms_system_sh_plan',
        'cms_system_sh_actual',
        'spi_loop_id'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
