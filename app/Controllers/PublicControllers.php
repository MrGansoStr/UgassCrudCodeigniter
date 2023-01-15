<?php

namespace App\Controllers;

use App\Models\ModelUser;

class PublicControllers extends BaseController
{
  public function index()
  {
    return view('/public/landing');
  }
  public function comunicados()
  {
    return view('/public/comuniques/comuniques');
  }
  public function noticias()
  {
    return view('/public/news/news');
  }
  public function contactos()
  {
    return view('/public/contacts/contacts');
  }
  public function login()
  {
    return view('/public/login/login');
  }
}