<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200224;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200224 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'pica',
                'password'  => md5('12200224')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200224',
                'password'  => md5('lidwinaprisca')
            ],
           
        ];
        $p = new pengguna12200224();
        $p->insertBatch($data);
    }
}
