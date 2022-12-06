<?php

namespace App\Models;

use CodeIgniter\Model;

class ConnexionModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['email', 'password'];
}