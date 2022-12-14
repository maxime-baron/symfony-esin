<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        $number = random_int(0, 100);
        $numberHight = random_int(100,200);

        return $this->render('index/index.html.twig', [
            'number' => $number,
            'numberHight' => $numberHight
        ]);
    }
}
