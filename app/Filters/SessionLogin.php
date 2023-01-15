<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SessionLogin implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!session('user_state') == 'logged') {
      return redirect()->to(base_url('/login'));
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Do something here
    if(session('user_rol') == 1) {
      return redirect()->to(base_url('/private/dashboard'));
    }
  }
}