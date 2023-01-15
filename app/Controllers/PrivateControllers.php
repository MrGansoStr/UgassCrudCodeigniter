<?php

namespace App\Controllers;

use App\Models\ModelReceipts;
use App\Models\ModelTransactions;

class PrivateControllers extends BaseController
{
  public function index()
  {
    $userdata = new ModelReceipts();
    $allreceipts = $userdata->getReceipts(session('id_user'));
    $expiredsReceipts = $userdata->getExpiredReceipts(session('id_user'));
    $balance = $userdata->getBalance(session('id_user'));
    $transactions = $userdata->getTransactions(session('id_user'));
    $data = [
      'allreceipts' => $allreceipts,
      'expiredReceipts' => $expiredsReceipts,
      'balance' => $balance,
      'transactions' => $transactions
    ];
    
    return view('/private/dashboard', $data);
  }
  public function payreceipts() {
    $userdata = new ModelReceipts();
    $pendingReceipts = $userdata->getPendingReceipts(session('id_user'));
    $data = [
      'pendingReceipts' => $pendingReceipts,
    ];
    return view('/private/payreceipts', $data);
  }

  public function pay(){
    $userdata = new ModelTransactions();
    $idreceipt = $this->request->getPost('idreceipt');
    $date = date('Y-m-d h:i:s');
    $encoded = md5($date.'recibopagado');
    $respuesta = $userdata->makeTransaction($idreceipt, session('id_user'), $encoded, $date);
    if ($respuesta) {
      return redirect()->to(base_url("").'/private/dashboard')->with('mensaje', 'Recibo pagado exitosamente');
    } else {
      return redirect()->to(base_url("").'/private/payreceipts')->with('mensaje', 'Hubo un error al hacer la transacción');
    }
  }

  public function salir()
  {
    $session = session();
    $session->destroy();
    return redirect()->to(base_url('/login'));
  }

}