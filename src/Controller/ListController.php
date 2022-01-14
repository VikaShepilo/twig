<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function index(): Response
    {
        $users = [
            'Viktoria' => '22.03.1997',
            'Roman' => '18.11.1999',
            'Uliana' => '15.07.2003',
            'Olga' => '20.09.1999',
        ];

        return $this->render('list/index.html.twig', [
            'users' => $users,
        ]);
    }
}
