<?php

namespace App\Models;
    use CodeIgniter\Model;

    class CommandeModel extends Model
    {
        protected $table = 'commande';
        protected $primaryKey = 'Id_Commande';
        protected $allowedFields = ['Nom', 'Adresse', 'Prix', 'Heure_Commande', 'Date_Commande', 'Statut_Commande'];
    }

?>