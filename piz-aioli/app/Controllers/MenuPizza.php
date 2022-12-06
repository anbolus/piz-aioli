<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuPizza extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    
        $this->load->library('cart');
        $this->load->model('MenuPizza');
    }
    
    function index(){
        $data = array();
        $data['pizza'] = $this->MenuPizza->getRows();
        
        // Load the MenuPizza list view
        $this->load->view('MenuPizza/index', $data);
    }
    
    function ajoutPa($proID){
    
        $MenuPizza = $this->MenuPizza->getRows($proID);
        
        // Add MenuPizza to the cart
        $data = array(
            'id'    => $MenuPizza['Id_Pizza'],
            'qte'    => 1,
            'prix'    => $MenuPizza['prix'],
            'nom'    => $MenuPizza['nom'],
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('cart/');
    }
    
}