<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
            ]
        );
        $this->forge->createTable('category');
    }

    public function down()
    {
        //
        $this->forge->dropTable('category');
    }
}
