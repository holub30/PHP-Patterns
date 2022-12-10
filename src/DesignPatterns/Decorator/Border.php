<?php

declare(strict_types=1);

namespace DesignPatterns\Decorator;

class Border extends BlockDecorator
{

    public function __construct(
        protected \DesignPatterns\Block $block,
        private int $borderWidth,
        private string $borderColor
    )
    {
        parent::__construct($block);
    }

    function render()
    {
        ob_start();

        require 'BorderHTML.php';

        echo ob_get_clean();
    }
}
