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
    public function login(Request $request, EntityManagerInterface $manager, SessionInterface $session): Response
    //Récupération des infos de login
    {
    $exampleInputEmail1=$request->request->get("exampleInputEmail1");
    $exampleInputPassword1=$request->request->get("exampleInputPassword1");
    //Recherche de l'utilisateur dans la base de données
    $Response = manager->getRepository(utilisateurs :: class)->findOneBy(['exampleInputEmail1'=>$exampleInputEmail1, 'exampleInputPassword1'=> $exampleInputPassword1]);
    //Vérifie si le mot de passe est correct
    if($Response==NULL){
        return new Response ("utilisateur".$exampleInputEmail1""$exampleInputPassword1.inconnu)
        else{
            return $this->render('serveur/index.html.twig'), [
            'controller_name' => 'ServeurController',

        ]);
            }  
        }
    }    
      /*
     * @Route("/createUser", name="createUser")
     */
    public function createUser(Request $request, EntityManagerInterface $manager): Response
    {
        $User = new Utilisateur();
        $User->setexampleInputEmail1($request->request->get('exampleInputEmail1'));
        $User->setexampleInputPassword1($request->request->get('exampleInputPassword1'));
        
        $manager->persist($User);
        $manager->flush();
        return $this->redirectToRoute('login');
        
        ]);
    }  

    
}
