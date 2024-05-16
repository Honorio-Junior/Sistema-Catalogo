<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'desc' => [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ],
            'cate_id' => [
                'type' => 'INTEGER'
            ],
            'value' => [
                'type' => 'REAL'
            ]
            ]
        );
        $this->forge->createTable('product');
    }

    public function down()
    {
        //
        $this->forge->dropTable('product');
    }
}
