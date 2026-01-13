<?php

namespace App\Controllers;

use App\Models\HomeModel;

class HomeController 
{
    private $todos;

    public function __construct()
    {
        $this->todos = new HomeModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Homepage Title',
            'message' => 'This is a message from Homecontroller',
            'todos' => $this->todos->fetchTodos()
        ];

        $this->view('home', $data);
    }

    protected function view($view, $data = [])
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }

    public function searchTodo()
    {
        $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
        $search = trim($search ?? '');

        $results = $this->todos->findTodo($search);

        $data = [
            'search' => $search,
            'results' => $results
        ];

        $this->view('search', $data);
    }
}