<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoopsTableCreation extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'                    => ['type' => 'INT','constraint' => 5,'unsigned' => true,'auto_increment' => true],
            'loop_name'             => ['type' => 'VARCHAR','constraint' => 25],
            'loop_desc'             => ['type' => 'VARCHAR','constraint' => 50],
            'loop_func'             => ['type' => 'VARCHAR','constraint' => 10],
            'loop_func_desc'        => ['type' => 'VARCHAR','constraint' => 25],
            'loop_type'             => ['type' => 'VARCHAR','constraint' => 10],
            'loop_location'         => ['type' => 'VARCHAR','constraint' => 25],
            'loop_dwg_doc'          => ['type' => 'VARCHAR','constraint' => 25],
            'loop_ready_status'     => ['type' => 'VARCHAR','constraint' => 3],
            'loop_ready_date'       => ['type' => 'DATE'],
            'loop_test_status'      => ['type' => 'VARCHAR','constraint' => 3],
            'loop_test_plan'        => ['type' => 'DATE'],
            'loop_test_actual'      => ['type' => 'DATE'],
            'form_id'               => ['type' => 'INT','constraint' => 5,'unsigned' => true],
            'form_number'           => ['type' => 'VARCHAR','constraint' => 25],
            'cms_system_id'         => ['type' => 'INT','constraint' => 5,'unsigned' => true],
            'cms_system_number'     => ['type' => 'VARCHAR','constraint' => 50],
            'cms_system_mc_plan'    => ['type' => 'DATE'],
            'cms_system_mc_actual'  => ['type' => 'DATE'],
            'cms_system_sh_plan'    => ['type' => 'DATE'],
            'cms_system_sh_actual'  => ['type' => 'DATE'],
            'spi_loop_id'           => ['type' => 'VARCHAR','constraint' => 30]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('form_id', 'forms', 'id');
        $this->forge->addForeignKey('cms_system_id', 'cms_systems', 'id');
        $this->forge->createTable('loops');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('loops');
    }
}
