<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditableController extends AbstractController
{
    #[Route('/editable', name: 'editable')]
    public function index(): Response
    {
        return $this->render('editable/index.html.twig', [
            'controller_name' => 'EditableController',
        ]);
    }
}
