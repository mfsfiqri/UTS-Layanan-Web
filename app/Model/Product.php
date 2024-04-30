<?php

namespace App\Model;

class Product
{
  // Method untuk mengambil semua produk dari database
  public static function getAllProducts()
  {
    // Kode untuk mengambil data dari database
    return [
      ['name' => 'Laptop', 'price' => 1000],
      ['name' => 'T-shirt', 'price' => 20],
      ['name' => 'Book', 'price' => 10]
    ];
  }
}
