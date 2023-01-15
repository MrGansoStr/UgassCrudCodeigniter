<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelReceipts extends Model
{
  public function getReceipts($userid)
  {
    $result = $this->db->query('SELECT a.id_receipt, a.code_conexion, MONTH(a.month_factured) AS monthFactured, YEAR(a.month_factured) AS yearFactured, a.number_receipt, a.mount, a.state, YEAR(a.issue) AS issueYear, MONTH(a.issue) AS issueMonth, DAY(a.issue) AS issueDay, YEAR(a.expires) AS expiresYear, MONTH(a.expires) AS expiresMonth, DAY(a.expires) AS expiresDay, b.Fname, b.LnameP FROM receipts a, users b WHERE b.id_user = a.id_user_child AND a.id_user_child = ?;', [$userid])->getResultArray();
    return $result;
  }
  public function getExpiredReceipts($userid) {
    $result = $this->db->query('SELECT a.id_receipt, a.code_conexion, MONTH(a.month_factured) AS monthFactured, YEAR(a.month_factured) AS yearFactured, a.number_receipt, a.mount, a.state, YEAR(a.issue) AS issueYear, MONTH(a.issue) AS issueMonth, DAY(a.issue) AS issueDay, YEAR(a.expires) AS expiresYear, MONTH(a.expires) AS expiresMonth, DAY(a.expires) AS expiresDay, b.Fname, b.LnameP FROM receipts a, users b WHERE b.id_user = a.id_user_child AND a.id_user_child = ? AND a.state = 2;', [$userid])->getResultArray();
    return $result;
  }
  public function getBalance($userid) {
    $result = $this->db->query('SELECT a.id_user, a.dni, b.val FROM users a JOIN balance b ON a.id_user = b.id_user_child WHERE a.id_user = ?;', [$userid])->getResultArray();
    return $result;
  }
  public function getTransactions($userid) {
    $result = $this->db->query('SELECT a.id_user, a.dni, b.id_transaction, b.id_transaction_encoded, b.time, b.status FROM users a JOIN transactions b ON a.id_user = b.id_user_child WHERE b.id_user_child = ?;', [$userid])->getResultArray();
    return $result;
  }

  public function getPendingReceipts($userid) {
    $result = $this->db->query('SELECT a.id_receipt, a.code_conexion, MONTH(a.month_factured) AS monthFactured, YEAR(a.month_factured) AS yearFactured, a.number_receipt, a.mount, a.state, YEAR(a.issue) AS issueYear, MONTH(a.issue) AS issueMonth, DAY(a.issue) AS issueDay, YEAR(a.expires) AS expiresYear, MONTH(a.expires) AS expiresMonth, DAY(a.expires) AS expiresDay, b.Fname, b.LnameP FROM receipts a, users b WHERE b.id_user = a.id_user_child AND a.id_user_child = ? AND a.state = 3;', [$userid])->getResultArray();
    return $result;
  }

  public function getReceipt($userid, $receiptid) {
    $result = $this->db->query('SELECT a.id_receipt, a.code_conexion, a.month_factured, a.number_receipt, a.mount, a.state, a.issue, a.expires, b.dni, b.type FROM receipts a JOIN users b ON a.id_user_child = b.id_user WHERE a.id_user_child = ? AND a.id_receipt = ?;', [$userid, $receiptid])->getResultArray();
    return $result;
  }

  public function insertOneReceipt($data) {
    $result = $this->db->query('INSERT INTO receipts (id_receipt, id_user_child, code_conexion, month_factured, number_receipt, mount, state, issue, expires) VALUES (default, ?, ?, "2022-12-20", ?, 1.0, 1, "2023-01-01", "2023-01-01");', [$data['id_user_child'], $data['code_conexion_receipt'], $data['number_receipt']]);
    return $result;
  }
  public function insertOneReceiptPending($data){
    $result = $this->db->query('INSERT INTO receipts (id_receipt, id_user_child, code_conexion, month_factured, number_receipt, mount, state, issue, expires) VALUES (default, ?, ?, "2022-12-20", ?, 1.0, 3, "2023-01-01", "2023-01-01");', [$data['id_user_child'], $data['code_conexion_receipt'], $data['number_receipt']]);
    return $result;
  }

}