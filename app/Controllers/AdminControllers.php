<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelReceipts;

class AdminControllers extends BaseController
{
  public function index()
  {
    $userdata = new ModelUser();
    $allusers = $userdata->getUsers();
    $data = [
      'allusers' => $allusers,
    ];

    return view('/admin/dashboardAdmin', $data);
  }
  public function registerUserView()
  {
    return view('/admin/registerUser');
  }
  public function registerUser()
  {
    $validation = $this->validate([
      'fname' => 'required|min_length[2]',
      'lnamep' => 'required|min_length[2]',
      'lnamem' => 'required|min_length[2]',
      'dni' => 'required|min_length[2]',
      'email' => 'required|min_length[2]',
      'phone' => 'required|min_length[2]',
      'address' => 'required|min_length[2]',
    ], [
        'fname' => [
          'required' => 'El Nombre es requerido',
          'min_length' => 'Los caracteres deben ser mayores a 2'
        ],
        'lnamep' => [
          'required' => 'El Apellido Paterno es requerido',
          'min_length' => 'Los caracteres deben ser mayores a 2'
        ]
      ]);
      $fdata= [
        "user_rol" => $_POST['rol'],
        "fname" => $_POST['fname'],
        "lnamep" => $_POST['lnamep'],
        "lnamem" => $_POST['lnamem'],
        "dni" => $_POST['dni'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "address" => $_POST['address'],
      ];
    if($validation) {
      $user = new ModelUser();
      $existsUser = $user->existsUser($fdata['dni']);
      if(count($existsUser) > 0) {
        session()->setFlashdata('mensaje', "El usuario ya existe");
        return redirect()->to(base_url('/admin/registeruser'));
      }
      else {
        $adduser = $user->createUser($fdata);
        if($adduser) {
          $userE = $user->searchUserByDNI($fdata['dni']);
          $code_conexion_receipt = '2651'.strval(rand(1000, 9999));
          $number_receipt = '2022-'.strval(rand(1000, 9999));
          //$code_conexion_receipt += strval(rand(1000, 9999));
          //$number_receipt += strval(rand(1000, 9999));
          //$number_receipt += strval(rand(1000, 9999));
          
          $receipt = new ModelReceipts();
          $f1data = [
            'id_user_child' => $userE[0]['id_user'],
            'code_conexion_receipt' => $code_conexion_receipt,
            'number_receipt' => $number_receipt
          ];
          
          $newReceipt = $receipt->insertOnereceipt($f1data);
          $newReceiptPending = $receipt->insertOneReceiptPending($f1data);
          if($newReceipt && $newReceiptPending) {
            session()->setFlashdata('mensaje', "El codigo de conexion para Inicio de sesión es: ".$code_conexion_receipt." Y su Apellido Paterno: ".$fdata['lnamep']);
            return redirect()->to(base_url('/admin/registeruser'));
          }
          else{
            session()->setFlashdata('mensaje', "Algo ocurrió al registrar el recibo");
            return redirect()->to(base_url('/admin/registeruser'));
          }
          //return redirect()->to(base_url('/admin/registeruser'))->with('info', $userE[0]['id_user']);
        }
        else {
          session()->setFlashdata('mensaje', "Algo ocurrió al registrar el usuario");
          return redirect()->to(base_url('/admin/registeruser'));
        }
      }
    }
    else {
      $error = $this->validator->listErrors();
      session()->setFlashdata('mensaje', $error);
      return redirect()->to(base_url('/admin/registeruser'));
    }
  }
  public function updateUser()
  {
    $newid = $this->request->getPost('newid');
    $newfname = $this->request->getPost('newfname');
    $newlnamep = $this->request->getPost('newlnamep');
    $newlnamem = $this->request->getPost('newlnamem');
    $newdni = $this->request->getPost('newdni');
    $newemail = $this->request->getPost('newemail');
    $newphone = $this->request->getPost('newphone');
    $newaddress = $this->request->getPost('newaddress');
    $data = [
      'newid' => $newid,
      'newfname' => $newfname,
      'newlnamep' => $newlnamep,
      'newlnamem' => $newlnamem,
      'newdni' => $newdni,
      'newemail' => $newemail,
      'newphone' => $newphone,
      'newaddress' => $newaddress
    ];
    $User = new ModelUser();
    $respuesta = $User->updateUser($data);

    $datos = ["datos" => $respuesta];

    return redirect()->to(base_url('/admin/dashboard'));
  }

  public function deleteUserURL($userid)
  {
    $user = new ModelUser();
    $response = $user->deleteUser($userid);
    if ($response) {
      return redirect()->to(base_url() . '/admin')->with('mensaje', '4');
    } else {
      return redirect()->to(base_url() . '/admin/dashboard')->with('mensaje', '5');
    }
  }
  public function salir()
  {
    $session = session();
    $session->destroy();
    return redirect()->to(base_url('/login'));
  }

}