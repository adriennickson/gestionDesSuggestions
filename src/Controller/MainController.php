<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SuggestionRepository;
use App\Repository\UserRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(SuggestionRepository $suggestionRepository, UserRepository $userRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'suggestions' => $suggestionRepository->findAll(),
            'users' => $userRepository->findAll(),
        ]);
    }
}
