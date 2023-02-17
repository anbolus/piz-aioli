<?php

namespace App\Models;
    use CodeIgniter\Model;

    class IngredientsModel extends Model
    {
        protected $table = 'ingredients';
        protected $primaryKey = 'Id_Ingredients';
        protected $allowedFields = ['Liste_Ingredients'];
    }

?>