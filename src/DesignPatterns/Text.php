<?php

declare(strict_types=1);

namespace DesignPatterns;

class Text extends Block
{

    public function render()
    {
        return "<p class=\"$this->class\">$this->content</p>";
    }
}
