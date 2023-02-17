<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class PizzaPersoModel extends Model
    {
        protected $table = 'pizzaperso';
        protected $primaryKey = 'Id_PizzaPerso';
        protected $allowedFields = ['Nom'];
    }
?>