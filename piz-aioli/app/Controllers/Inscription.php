<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inscription extends Controller
{
    public function index()
    {
        helper(['form', 'url']);

        if (! $this->validate([])) {
            echo view('Inscription', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Success');
        }
    }
}