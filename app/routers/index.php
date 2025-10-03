<?php
// ROUTER PRINCIPAL


// ROUTE PAR DEFAUT: liste des posts
// PATTERN: /
// CTRL: postsController
// ACTION: index
// TITLE: Alex Parker - Blog
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\index($connexion);