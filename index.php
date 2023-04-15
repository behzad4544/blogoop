<?php

require "./vendor/autoload.php";

use App\Entities\{PostEntity, UserEntity, SettingEntity};
use App\Classes\Database;

$database = new Database('posts', PostEntity::class);
dd($database->data);
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