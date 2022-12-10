<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;

use DesignPatterns\Block;

abstract class BlockDecorator extends Block
{

    public function __construct(protected \DesignPatterns\Block $block)
    {
    }

    abstract function render();
}
