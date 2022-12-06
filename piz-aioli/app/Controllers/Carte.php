<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CarteModel;

class Carte extends BaseController {

    public function index(){
        $carteModel = new CarteModel();
        $data['pizzas'] = $carteModel->findAll();
        return view('carte', $data);
    }
}