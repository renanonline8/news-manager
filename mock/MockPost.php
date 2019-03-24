<?php
namespace Mock;

use \App\Post\Post;

class MockPost
{
    static function idOne(): Post
    {
        return new Post(1, 'Ola Mundo', 'Este maravilhoso mundo', '2019-03-24');
    }

    static function idTwo(): Post
    {
        return new Post(2, 'Dia Feliz', 'Este é um novo dia', '2019-03-23');
    }
}