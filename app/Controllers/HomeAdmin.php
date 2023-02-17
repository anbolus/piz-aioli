<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PizzaModel;

class HomeAdmin extends BaseController {

    public function index(){
        $PizzaModel = new PizzaModel();
        $data['pizzas'] = $PizzaModel->findAll();
        return view('gestionPizza', $data);
    }
}