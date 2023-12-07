<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tags extends Migration
{      
    public function up()
    {        
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'tag_number' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'tag_status' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
            ],
            'tag_class' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tag_sequence' => [
                'type' => 'INT',                
                'unsigned' => true,
                'constraint' => 3,
            ],
            'tag_parent' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_service' => [
                'type' => 'VARCHAR',            
                'constraint' => 30,
            ],
            'tag_instrument_type' => [
                'type' => 'VARCHAR',            
                'constraint' => 30,
            ],
            'tag_instrument_type_desc' => [
                'type' => 'VARCHAR',            
                'constraint' => 50,
            ],
            'tag_dwg_title' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_location' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_line_number' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_equipment_name' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_io_type' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'tag_io_location' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_signal_type' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'tag_system_dest' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_power_supply' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'tag_esd_psd' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_srd' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_fail_action' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_line_mon' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_fire_zone' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_cae_diagram' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_po_number' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_requisition_no' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_wbs' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_calib_range_min' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_calib_range_max' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_uom' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_alarm_LL' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_alarm_L' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_alarm_H' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_alarm_HH' => [
                'type' => 'DECIMAL',            
                'constraint' => 10,
            ],
            'tag_valve_type' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'tag_stroke_time' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_manufacturer' => [
                'type' => 'VARCHAR',            
                'constraint' => 25,
            ],
            'tag_model_no' => [
                'type' => 'VARCHAR',            
                'constraint' => 50,
            ],
            'tag_serial_no' => [
                'type' => 'VARCHAR',            
                'constraint' => 50,
            ],
            'tag_certs' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'tag_state_on' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'tag_state_off' => [
                'type' => 'VARCHAR',            
                'constraint' => 10,
            ],
            'loop_id' => [
                'type' => 'INT',            
                'constraint' => 5,
                'unsigned' => true,
            ],
            'cms_system_number_id' => [
                'type' => 'INT',            
                'constraint' => 5,
                'unsigned' => true,
            ],
            'cms_system_number' => [
                'type' => 'VARCHAR',            
                'constraint' => 50,
            ],
            'unit_number' => [
                'type' => 'VARCHAR',            
                'constraint' => 5,
            ],
            'spi_cmpnt_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'spi_tag_number' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'spi_loop_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ]            
        ]);        
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('loop_id', 'tags', 'id');
        $this->forge->addForeignKey('cms_system_number_id', 'cms_system_numbers', 'id');
        $this->forge->createTable('tags');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tags');
    }
}
