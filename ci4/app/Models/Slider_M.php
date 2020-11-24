<?php

namespace App\Models;

use CodeIgniter\Model;

class Slider_M extends Model
{
    protected $table = 'tblslider';

    protected $allowedFields = ['slider', 'tipe'];

    protected $primaryKey = 'idslider';
}