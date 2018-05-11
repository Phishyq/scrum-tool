<?php

namespace ST\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function Login()
    {
        return $this->render('login/login.html.twig');
    }
}
