<?php

namespace App\Models;

use CodeIgniter\Model;

class ConnexionAdminModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['email', 'password'];
}