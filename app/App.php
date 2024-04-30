<?php

namespace App;

use App\Controller\CategoryController;
use App\Controller\ProductController;
use App\Controller\SupplierController;
use App\Controller\TransactionController;

class Router
{
  public static function route($path)
  {
    switch ($path) {
      case '/':
        CategoryController::index();
        break;
      case '/products':
        ProductController::index();
        break;
      case '/suppliers':
        SupplierController::index();
        break;
      case '/transactions':
        TransactionController::index();
        break;
      default:
        http_response_code(404);
        echo "404 Page Not Found";
        break;
    }
  }
}
