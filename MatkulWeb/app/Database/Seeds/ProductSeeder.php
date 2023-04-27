<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'product_name' => 'tas',
                'stock' => '8',
                'price' => '200000',
            ],
            [
                'product_name' => 'sepatu',
                'stock' => '70',
                'price' => '350000',
            ],
        ];

        $this->db->table('table_product')->insertBatch($data);
    }
}
