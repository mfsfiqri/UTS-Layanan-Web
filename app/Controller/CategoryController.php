<?php

namespace App\Controller;

use App\Model\Category;

class CategoryController
{
  public static function index()
  {
    $categories = Category::getAllCategories();
    require_once('../app/View/category.php');
  }
}
