<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class randomForm extends Controller
{
    
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([])) {
            echo view('randomForm', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Success');
        }
    }
}