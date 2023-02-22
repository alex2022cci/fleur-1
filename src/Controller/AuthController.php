<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends abstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    public function index():Response
    {
        return $this->render('authentification/checkout.html.twig');
    }
}