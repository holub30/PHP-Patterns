<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;

class Comments extends BlockDecorator
{

    public function getLength(): int
    {
        return strlen($this->block->content);
    }

    public function render()
    {
        ob_start();

        require 'CommentsHTML.php';

        echo ob_get_clean();
    }
}
