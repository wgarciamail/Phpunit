<?php
namespace App;
require "src/Comment.php";
require "src/Post.php";

//codigo base para generar la prueba
$post = new Post();
$comment = new Comment();
$post->addComment($comment);
echo $post->conutComments();
var_dump($post->getComments()[0]);
?>