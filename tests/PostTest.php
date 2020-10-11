<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase
{
    public function testAddCommentToPost()
    {
        //codigo base para generar la prueba
        $post = new Post();
        $comment = new Comment();
        $post->addComment($comment);

        //Utilidad de phpUnit.
        //Verifica que post tenga un comentario.
        $this->assertEquals(1, $post->conutComments());
        //Verifica que el comentario sea una instancia de comment.
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}

?>