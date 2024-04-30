<?php

namespace App\Model;

class Category
{
  // Method untuk mengambil semua kategori dari database
  public static function getAllCategories()
  {
    // Kode untuk mengambil data dari database
    return ['Electronics', 'Clothing', 'Books'];
  }
}
