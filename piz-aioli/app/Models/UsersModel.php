<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class UsersModel extends Model
    {
        protected $table = 'users';
        protected $primaryKey = 'Id_Users';
        protected $allowedFields = ['Nom', 'Prenom', 'Adresse', 'Email', 'Login', 'MDP', 'Role', 'Telephone'];
    }
?>