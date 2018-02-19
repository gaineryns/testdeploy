<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends Controller
{
    /**
     * @Route("/", name="first")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('base.html.twig',[]);
    }
}
