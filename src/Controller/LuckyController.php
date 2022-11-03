<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
  public function number(): Response
  {
    $number = phpinfo();

    return new Response(
      '<html><body>Lucky number: ' . $number . '</body></html>'
    );
  }
}
