<?php

declare(strict_types=1);

namespace DesignPatterns;

class Button extends Block
{

    public function render()
    {
        echo "<button class=\"$this->class\" type=\"button\">$this->content</button>";
    }
}
