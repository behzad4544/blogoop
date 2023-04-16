<?php

require "./vendor/autoload.php";

use App\Classes\Database;
use App\Entities\PostEntity;
use App\Models\{Post, User, Setting};

$post = new Post();
$posts = $post->filterData(function ($item) {
    return str_contains($item->getTitle(), 'test');
});
dd($posts);
