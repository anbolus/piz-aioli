<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CarteModel;

class Panier extends BaseController {

    public function index(){
        $data['pizza'] = array_values(session('panier'));
        return view('carte', $data);
    }

    public function ajouterPanier(){
        $carteModel = new CarteModel();
        $pizza = $carteModel->find($id);
        $item = array(
            'id' => $pizza['Id_Pizza'],
            'nom' => $pizza['Nom'],
            'ingredients' => $pizza['Ingredients'],
            'image' => $pizza['Image'],
            'prix' => $pizza['Prix'],
            'qte' => 1
        );
        $session = session();

        if($session->has('panier')){
            
        } else {
            $panier = array($item);
            $session->set('panier', $panier);
        }

        return $this->response->redirect(site_url('panier/' . $pizza['Nom']));
    }
}