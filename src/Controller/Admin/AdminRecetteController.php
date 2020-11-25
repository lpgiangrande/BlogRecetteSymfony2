<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RecetteRepository;
use App\Form\RecetteType;
use App\Entity\Recette;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class AdminRecetteController extends AbstractController
{
    //private EntityManagerInterface $em;
    //private RecetteRepository $repository;
    
    public function __construct(EntityManagerInterface $em, RecetteRepository $repository)//initialisé ici car utilisé svt dans la classe
    {
        $this->em = $em;
        $this->repository = $repository;
    }


    /**
     * @Route("/admin", name="admin_index")
     */
    public function index() : Response 
    {
        $recettes = $this->repository->findAll();

        return $this->render('admin/index.html.twig', [
            'recettes' => $recettes,
            'menu' => 'admin'
        ]);
    }



    // CREATION RECETTE

    /**
     * @Route("/admin/create", name="admin_create") 
     */
    public function create(Request $request) 
    {
        $recette = new Recette();
        //$recette->setCreatedAt(new DateTime()); OU directement dans __construct

        $form = $this->createForm(RecetteType::class, $recette);
        // param 1 : a partir de quel modele creer le form
        // param 2 : variable stockant les éléments du form 

        $form->handleRequest($request); 
        // Enregistrer ce qui est entré par l'user dans le form

        if ($form->isSubmitted() && $form->isValid())
        {
            //EntityManagerInterface (initialisé dans __construct) et persiter dans BDD
            $this->em->persist($recette);
            $this->em->flush();

            $this->addFlash('success', "Votre recette a bien été enregistrée");
            return $this->redirectToRoute('admin_index', [], 301); // 301 code de redirection http
        }

        return $this->render('admin/create.html.twig', [
            //createView = vue du formulaire
            'formRecette' => $form->createView(),
            'menu' =>'admin' // renvoi au menu correspondant cf condition fichier twig base
            
        ]);
    }


    // EDITION CREATION RECETTE

    /**
     * @Route("/admin/edit/{id}", name="admin_edit") 
     */
    public function edit(Request $request, int $id, RecetteRepository $recetteRepository)
    {
        // récupérer la recette selon l'id
        $recette = $this->repository->find($id);
        $form = $this->createForm(RecetteType::class, $recette);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush(); 
            // pas de persist, car persist permet d'initialiser qqh que la bdd ne connaît pas
            // a recette existant deja en bdd
            $this->addFlash('success', 'Votre recette a bien été mise à jour');
            return $this->redirectToRoute('admin_index', [], 301);
        }
        return $this->render('admin/edit.html.twig', [
            'menu' => 'admin',
            'formRecette' => $form->createView()
        ]);
    }





}




?>