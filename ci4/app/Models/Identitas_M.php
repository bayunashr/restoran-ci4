<?php

namespace App\Models;

use CodeIgniter\Model;

class Identitas_M extends Model
{
    protected $table = 'tblidentitas';

    protected $allowedFields = ['title', 'slogan','logo', 'favicon','deskripsi', 'sejarah','alamat', 'telepon','facebook', 'twitter','instagram', 'email'];

    protected $primaryKey = 'idrestoran';
}