<?php

class Category
{
    protected string $type;
    protected string $image;

    public function getType(): string
    {
        return $this->type;
    }
    public function getImage(): string
    {
        return $this->image;
    }
}
