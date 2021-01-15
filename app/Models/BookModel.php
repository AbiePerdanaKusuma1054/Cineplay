<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'pesan';
    protected $allowedFields = ['nama', 'ttr', 'krs', 'tgl', 'jml', 'jenis'];
}
