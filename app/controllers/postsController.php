<?php

namespace App\Controllers\PostsController;

use \PDO;

function index(PDO $connexion) 
{
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\getAll($connexion);
    
    // Je charge la vue "list" dans $content
    global $content, $title;
    $title = "blog";
    ob_start();
    include '../app/views/pages/list.php';
    $content = ob_get_clean();
}