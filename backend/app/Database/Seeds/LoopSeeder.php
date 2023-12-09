<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoopSeeder extends Seeder
{
    public function run()
    {
        $this->db->disableForeignKeyChecks();
        
        // column array
        $loopsColumns = [
            'id',
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

        // Read data from a text file        
        $fileName = 'loops_20231209.txt';
        $loopsData = file_get_contents(APPPATH . 'Database/Seeds/Data/'.$fileName);
        $loopsArray = explode("\n", $loopsData);
        
        $i=1;
        foreach ($loopsArray as $loop) {
            $data = explode("|", $loop);            
            $arrayKeyValue = array_combine($loopsColumns,$data);
            echo "Insert data:".$i."\n";
            $this->db->table('loops')->insert($arrayKeyValue);            
            $i++;
        }

        $this->db->enableForeignKeyChecks();
    }
}
