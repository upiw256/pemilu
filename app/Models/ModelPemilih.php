<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPemilih extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pemilih';
    protected $primaryKey       = 'id_pemilih';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pemilih', 'nis','nama','kelas','pilihan'];

}
