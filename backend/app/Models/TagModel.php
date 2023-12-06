<?php

namespace App\Models;

use CodeIgniter\Model;

class TagModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tags';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'tag_number' ,
        'tag_status' ,
        'tag_class' ,
        'tag_sequence' ,
        'tag_parent',
        'tag_service' ,
        'tag_instrument_type' ,
        'tag_instrument_type_desc' ,
        'tag_dwg_title' ,
        'tag_location' ,
        'tag_line_number' ,
        'tag_equipment_name' ,
        'tag_io_type' ,
        'tag_io_location' ,
        'tag_signal_type' ,
        'tag_system_dest' ,
        'tag_power_supply' ,
        'tag_esd_psd' ,
        'tag_srd' ,
        'tag_fail_action' ,
        'tag_line_mon' ,
        'tag_fire_zone',
        'tag_cae_diagram' ,
        'tag_po_number' ,
        'tag_requisition_no' ,
        'tag_wbs' ,
        'tag_calib_range_min' ,
        'tag_calib_range_max' ,
        'tag_uom' ,
        'tag_alarm_LL' ,
        'tag_alarm_L',
        'tag_alarm_H' ,
        'tag_alarm_HH' ,
        'tag_valve_type',
        'tag_stroke_time' ,
        'tag_manufacturer' ,
        'tag_model_no' ,
        'tag_serial_no' ,
        'tag_certs' ,
        'tag_state_on' ,
        'tag_state_off' ,
        'loop_id' ,
        'cms_system_number_id' ,
        'cms_system_number' ,
        'unit_number' ,
        'spi_cmpnt_id' ,
        'spi_tag_number',
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
