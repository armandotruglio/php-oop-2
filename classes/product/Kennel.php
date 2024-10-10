<?php

class Kennel extends Product
{
    public function __construct(string $_title, string $_image, string $_price, Category $_category)
    {
        $this->type = "Cuccia";
        parent::__construct($_title, $_image, $_price, $_category);
    }
}