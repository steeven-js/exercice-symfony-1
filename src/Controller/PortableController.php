<?php

namespace App\Controller;

use App\Entity\Portable;
use App\Form\PortableType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PortableController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    // 1. Dès que ce formulaire est saisi (ecoute submit)
    // 2. Traiter les informations
    // 3. Les valider ou pas...
    // 4. Si tout est ok => enregister en DB


    
    #[Route('/portable', name: 'app_add_portable')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $portables = new Portable();
        $form = $this->createForm(PortableType::class, $portables);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $portables = $form->getData();
            // dd($portable); // 1.

            $entityManager->persist($portables);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
             
        }

        return $this->render('portable/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    #[Route('/mes-portables', name: 'app_mes_portables')]
    public function show1(): Response
    {
        $portables = $this->entityManager->getRepository(Portable::class)->findAll();

        return $this->render('portable/mes_portables.html.twig', [
            'portables' => $portables,
        ]);
    }

}
