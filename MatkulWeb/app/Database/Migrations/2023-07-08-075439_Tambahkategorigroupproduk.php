<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tambahkategorigroupproduk extends Migration
{
    public function up()
    {
        $this->forge->addColumn('table_product', [
            'kategorigroupproduk' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true,
            ],
            'hargabeliproduk' => [
                'type' => 'INTEGER',
                'constraint' => 7,
                'null' => true,
            ]
        ]);
    }


    public function down()
    {
        //
    }
}
