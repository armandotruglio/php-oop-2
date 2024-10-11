<?php
require_once __DIR__ . "/../category/Category.php";
require __DIR__ . "/../trait/Loggable.php";

class Product
{
    protected string $type = "Prodotto Generico";
    protected string $title;
    protected string $image;
    protected string $price;
    protected Category $category;

    use Loggable;


    public function __construct(string $_title, string $_image, string $_price, Category $_category)
    {
        $this->title = $_title;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getType(): string
    {
        return $this->type;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getPrice(): string
    {
        return $this->price;
    }
    public function getCategory(): Category
    {
        return $this->category;
    }
}
