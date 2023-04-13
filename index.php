<?php

require "./vendor/autoload.php";

use App\Entities\PostEntity;

$postEntity = new PostEntity();
$postEntity->setId(1);
$postEntity->setTitle("title");
$postEntity->setContent("content");
$postEntity->setCategory("sport");
$postEntity->setView(40);
$postEntity->setImage("/assets/images/1.jpg");
$postEntity->setDate(time());
var_dump($postEntity);
