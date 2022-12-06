<?php

namespace App\Models;

use CodeIgniter\Model;

class InscriptionModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['Nom', 'Prenom', 'Adresse', 'Email', 'Login', 'MDP', 'Telephone'];
}