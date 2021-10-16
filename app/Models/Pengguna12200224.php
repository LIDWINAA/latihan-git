<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna12200224 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna12200224';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];

}
