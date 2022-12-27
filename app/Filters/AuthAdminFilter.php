<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthAdminFilter implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!session()->get('is_admin') && !session()->get('is_login')) {
      session()->setFlashdata('error', 'Silahkan login terlebih dahulu');
      return redirect()->to('/admin/login')->with('error', 'Silahkan login terlebih dahulu');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
