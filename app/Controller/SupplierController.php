<?php

namespace App\Controller;

use App\Model\Supplier;

class SupplierController
{
  public static function index()
  {
    $suppliers = Supplier::getAllSuppliers();
    require_once('../app/View/supplier.php');
  }
}
