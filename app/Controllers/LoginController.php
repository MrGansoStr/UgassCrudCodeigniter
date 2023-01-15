<?php

namespace App\Controllers;

use App\Models\ModelUser;

class LoginController extends BaseController
{
  public function index()
  {
    return view('/private/dashboard');
  }

  public function inicio()
  {
    return view('navbar');
  }

  public function login()
  {
    $validacion = $this->validate([
      'codeconexion' => 'required|min_length[2]',
      'lnamep' => 'required|min_length[2]'
    ], [
        'codeconexion' => [
          'required' => 'El usuario es requerido',
          'min_length' => 'Los caracteres deben ser mayores a 2'
        ],
        'lnamep' => [
          'required' => 'El usuario es requerido',
          'min_length' => 'Los caracteres deben ser mayores a 2'
        ]
      ]);
    if ($validacion) {
      $codeconexion = $this->request->getPost('codeconexion');
      $lnamep = $this->request->getPost('lnamep');

      $users = new ModelUser();
      
      $dataUser = $users->loginAccount($codeconexion, $lnamep);
      if (count($dataUser) == 0) {
        session()->setFlashdata('mensaje', "Codigo de Conexion o Apellido Parteno Incorrectos");
        return redirect()->to(base_url('/login'));
      }
      $dataUser[0] += ['user_state' => 'Logged'];
      $session = session();
      $session->set($dataUser[0]);
      if(session('user_rol') == 1) {
        return redirect()->to(base_url('/private/dashboard'));
      }
      else if(session('user_rol') == 2){
        return redirect()->to(base_url('/admin/dashboard'));
      }
    } else {
      $error = $this->validator->listErrors();
      session()->setFlashdata('mensaje', $error);
      return redirect()->to(base_url('/login'));
    }
  }

  public function crearUsuario()
  {
    $datos = [
      "user_name" => $_POST['nombre'],
      "user_psw" => password_hash($_POST['pasword'], PASSWORD_DEFAULT),
      "user_type" => $_POST['tipo_usuario']
    ];
    $usuario = new ModelUser();

    $respuesta = $usuario->insertar($datos);
    if ($respuesta > 0) {
      return redirect()->to(base_url() . '/')->with('mensaje', '1');
    } else {
      return redirect()->to(base_url() . '/')->with('mensaje', '0');
    }
  }
  public function registro()
  {
    return view("formRegistro");
  }

}