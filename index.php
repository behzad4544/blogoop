<?php

require "./vendor/autoload.php";


use App\Models\{Post, User, Setting};


// $database = new Database('posts', PostEntity::class);
// dd($database->data);
// $newPost = new PostEntity([
//     'id' => 11,
//     'title' => 'test',
//     'content' => 'test content',
//     'category' => 'sport',
//     'view' => 1111,
//     'image' => './image/1.jpg',
//     'date' => date('Y-m-d H:i:s')
// ]);
// $database->data[] = $newPost;
// $database->setData($database->data);
// $user = new User;
// dd($user->getAllData());
$post = new Post();
dd($post->getLastData());
