<?php

namespace App\Models;
use CodeIgniter\Model;


class CarteModel extends Model {
    public $table = "pizzas";
    public $primaryKey = "Id_Pizza";
    public $allowedFields = ['Id_Pizza', 'Taille', 'Nom', 'Ingredients', 'Image', 'Prix'];
}