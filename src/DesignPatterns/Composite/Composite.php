<?php

declare(strict_types=1);

namespace DesignPatterns\Composite;

class Composite extends \DesignPatterns\Block
{
    public function __construct(private string $name, private array $blockArr = [])
    {
    }

    public function add(\DesignPatterns\Block $block)
    {
        $this->blockArr[] = $block;
    }

    public function render(): string
    {
        $result = $this->name;

        foreach ($this->blockArr as $block) {
            $result .= $block->render();
        }

        return $result;
    }
}
