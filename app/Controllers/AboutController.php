<?php

namespace App\Controllers;

class AboutController 
{
    public function index()
    {
        $data = [
            'title' => 'About Title',
            'message' => 'This is a message from Aboutcontroller'
        ];

        $this->view('about', $data);
    }

    protected function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}