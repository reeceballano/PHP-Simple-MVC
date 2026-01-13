<?php

namespace App\Models;

use DB\DB;
use PDO;

require_once __DIR__ . "/../../Db/DB.php";

class HomeModel
{
    private $pdo;

    public function __construct() 
    {
        $this->pdo = new DB();
    }

    public function fetchTodos()
    {
        $stmt = $this->pdo->prepare("SELECT id, title, description, completed FROM todos ORDER by created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findTodo($title)
    {
        // $stmt = $this->pdo->prepare("SELECT id, title, description, completed, created_at, updated_at FROM todos WHERE title LIKE :title ORDER by title DESC");
        $stmt = $this->pdo->prepare("SELECT id, title, category, completed, created_at, updated_at FROM todos WHERE title LIKE :title");
        $stmt->bindValue(":title", '%' . $title . '%', PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}