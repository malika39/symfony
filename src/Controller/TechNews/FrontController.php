<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 17/12/2018
 * Time: 14:18
 */

namespace App\Controller\TechNews;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController

{

    public function index()
    {
        return new Response("<html><body><h1>Page d'acceuil</h1></body></html>");
    }

    public function contact()
    {
        return new Response("<html><body><h1>Page de Contact</h1></body></html>");
    }

    /**
     * Page permettant d'afficher les articles d'une catégorie
     * @Route("/categorie/{slug<[a-zA-Z1-9-_/]+>?news}",
     *     methods={"POST|GET"},
     *     name="front_categorie")
     * @param $slug
     * @return Response
     */
    public function categorie($slug)
    {
        return new Response("<html><body><h1>PAGE CATEGORIE : " .
            "$slug</h1></body></html>");
    }

    /**
     * @Route("/{categorie<[a-zA-Z1-9-_/]+>}/{slug<[a-zA-Z1-9-_/]+>}_{id<\d+>}.html",
     *     name="front_article")
     * @param $id
     * @param $slug
     * @param $categorie
     */
   public function article($id,$slug,$categorie)
   {
      #Exemple d'URL
       #/politique/vinci-autoroute_944.html
       return new Response("<html><body><h1>PAGE Article : " .
           "$id</h1></body></html>");
   }

}

