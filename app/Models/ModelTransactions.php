<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransactions extends Model
{
  public function makeTransaction($receiptid, $userid, $encoded, $time) {
    $result = $this->db->query('INSERT INTO transactions (id_transaction, id_receipt_child, id_user_child, id_transaction_encoded, time, status, payedWith) VALUES (default, ?, ?, ?, ?, 1, 2);', [$receiptid, $userid, $encoded, $time]);
    return $result;
  }
}