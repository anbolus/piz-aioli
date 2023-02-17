<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ConnexionAdmin extends Controller
{
    
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([])) {
            echo view('connexionAdmin', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Success');
        }
    }
}