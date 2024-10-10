<?php
require_once "../category/Category.php";

class Product
{
    protected string $title;
    protected string $image;
    protected string $price;
    protected Category $category;
}
