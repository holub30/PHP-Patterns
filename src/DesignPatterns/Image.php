<?php

declare(strict_types=1);

namespace DesignPatterns;

class Image extends Block
{

    public function render()
    {
        echo "<img class=\"$this->class\" src=\"$this->content\" alt=\"$this->content\">";
    }
}
