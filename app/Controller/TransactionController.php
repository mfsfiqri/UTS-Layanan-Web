<?php

namespace App\Controller;

use App\Model\Transaction;

class TransactionController
{
  public static function index()
  {
    // Logic untuk menyimpan transaksi ke database (jika diperlukan)
    // Contoh: Transaction::saveTransaction($data);

    // Setelah transaksi berhasil disimpan, tampilkan halaman transaksi
    require_once('../app/View/transaction.php');
  }
}
