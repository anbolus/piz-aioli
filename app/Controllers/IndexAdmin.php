<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class IndexAdmin extends Controller
{
    
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([])) {
            echo view('indexAdmin', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('\indexAdmin');
        }
    }
}