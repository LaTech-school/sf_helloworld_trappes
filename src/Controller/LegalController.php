<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    /**
     * @Route("/mentions-legale", name="legal")
     */
    public function index(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'Mentions legale',
        ]);
    }

    /**
     * @Route("/cookies", name="cookies")
     */
    public function cookies(): Response
    {
        return $this->render('legal/cookies.html.twig', [
            'title' => "Politique concernant les Cookies",
            'content' => "Lorem ipsum.... blablabla..."
        ]);
    }

    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'Les CGU',
        ]);
    }


    // Methode non déclenchée par une route
    public function privacy_policy(): Response
    {
        return $this->render('legal/index.html.twig', [
            'controller_name' => 'Politique de vie privée',
        ]);
    }
}
