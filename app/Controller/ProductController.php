<?php

namespace App\Controller;

use App\Model\Product;

class ProductController
{
  public static function index()
  {
    $products = Product::getAllProducts();
    require_once('../app/View/product.php');
  }
}
