<?php

namespace App\Models;

use DB\DB;

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

}