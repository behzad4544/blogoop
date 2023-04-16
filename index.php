<?php

require "./vendor/autoload.php";

use App\Classes\Database;
use App\Entities\PostEntity;
use App\Models\{Post, User, Setting};

$post = new PostEntity([
    "id" => 121,
    "title" => "behzad1.",
    "content" => "LOREM IPSUM11111.",
    "date" => "2023-06-02 12:42:00",
    "category" => "spoerting",
    "image" => "images/9.jpg",
    "view" => 4444
]);
$newPost = new Post();
$newPost->editData($post);
// $newPost->deleteData(11);