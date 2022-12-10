<?php

declare(strict_types=1);

namespace DesignPatterns;

abstract class Block implements Renderable
{

    public function __construct(protected string $class, protected string $content)
    {
    }

    abstract function render();
}
