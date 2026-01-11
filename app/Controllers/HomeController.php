<?php

namespace App\Controllers;

use App\Models\HomeModel;

class HomeController 
{
    public function index()
    {
        $todos = new HomeModel();

        $data = [
            'title' => 'Homepage Title',
            'message' => 'This is a message from Homecontroller',
            'todos' => $todos->fetchTodos()
        ];

        $this->view('home', $data);
    }

    protected function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}