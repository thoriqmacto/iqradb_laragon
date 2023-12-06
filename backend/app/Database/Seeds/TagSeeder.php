<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        
        // column array
        $tagsColumns = [
            'id',
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

        // Read data from a text file
        $fileName = 'tags_20231206.txt'; // containing single-quote value
        $tagsData = file_get_contents(APPPATH . 'Database/Seeds/Data/'.$fileName);
        $tagsArray = explode("\n", $tagsData);
        
        $i=1;
        foreach ($tagsArray as $tag) {
            $data = explode("|", $tag);            
            $arrayKeyValue = array_combine($tagsColumns,$data);
            echo "Insert data:".$i."\n";
            $this->db->table('tags')->insert($arrayKeyValue);            
            $i++;
        }

        $this->db->enableForeignKeyChecks();
    }
}
