<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class ShopModel extends Model
    {
        protected $table = 'shop';
        protected $primaryKey = 'Id_Shop';
        protected $allowedFields = ['Nom', 'Adresse', 'Presentation_Information'];
    }
?>