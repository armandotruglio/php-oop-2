<?php

class Food extends Product
{
    public function __construct(string $_title, string $_image, string $_price, Category $_category)
    {
        $this->type = "Cibo";
        parent::__construct($_title, $_image, $_price, $_category);
    }
}
