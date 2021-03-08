<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServeurController extends AbstractController
{
    /**
     * @Route("/serveur", name="serveur")
     */
    public function index(): Response
    {
        return $this->render('serveur/index.html.twig', [
            'controller_name' => 'ServeurController',
        ]);
    }
   /**
     * @Route("/form", name="form")
     */
    public function form(): Response
    {
        return $this->render('serveur/form.html.twig', [
            'controller_name' => 'ServeurController',
        ]);
    }
      /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, EntityManagerInterface $manager, SessionInterface $session):
    //Récupération des infos de login
    {
    $exampleInputEmail1=$request->request->get("exampleInputEmail1");
    $exampleInputPassword1=$request->request->get("exampleInputPassword1");
    //Recherche de l'utilisateur dans la base de données
    $utilisateur = manager-> getRepository(Utilisateur :: class)->findOneByEmail=>txt 
    //Vérifie si le mot de passe est correct
    if($Utilisateur==NULL){
        return new Response ("Utilisateur".$exampleInputEmail1""$exampleInputPassword1.inconnu)
        else{
            return $this->render('serveur/index.html.twig'), [
            'controller_name' => 'ServeurController',

        ]);
            }  

        /**
     * @Route("/login", name="login")
     */
           

    }
}
