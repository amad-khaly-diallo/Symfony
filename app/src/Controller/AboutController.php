<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('about/index.html.twig', [
            'titre' => 'A propos de nous',
            'description' => 'Bienvenue sur notre application Symfony ! Nous sommes ravis de vous présenter notre projet, qui a été développé avec passion et dévouement. Notre application vise à offrir une expérience utilisateur exceptionnelle en combinant des fonctionnalités innovantes avec une interface conviviale.',
            'users' => $users
        ]);
    }
}
