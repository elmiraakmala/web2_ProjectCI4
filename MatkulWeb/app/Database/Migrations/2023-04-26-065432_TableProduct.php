<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableProduct extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
            'product_name'      => ['type' => 'VARCHAR', 'constraint' => 700],
            'stock'         => ['type' => 'INT'],
            'price'      => ['type' => 'INT'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('table_product');
    }

    public function down()
    {
        //
    }
}
