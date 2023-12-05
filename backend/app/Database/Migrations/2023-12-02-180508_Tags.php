<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tags extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,                
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'spi_cmpnt_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
            ],
            'spi_tag_number' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'tag_number' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'cms_system_number' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
            ],
            'spi_loop_id' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
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
                'unsigned' => true,
                'constraint' => 25,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tags');
    }

    public function down()
    {
        $this->forge->dropTable('tags');
    }
}
