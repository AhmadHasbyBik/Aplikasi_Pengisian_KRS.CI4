<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (!session()->get('npm') && !session()->get('is_login')) {
      session()->setFlashdata('error', 'Silahkan login terlebih dahulu');
      return redirect()->to('/')->with('error', 'Silahkan login terlebih dahulu');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
  }
}
