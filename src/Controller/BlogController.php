<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'blog_home')]
    public function index(): Response
    {
        return $this -> render('blog/index.html.twig');    
    }

    #[Route('/add', name:'blog_article_add')]
    public function add(): Response
    {
        return $this -> render('blog/add.html.twig');    
    }

    #[Route('/show/{url}', name:'blog_article_show')]
    public function show($url): Response
    {
        return $this -> render('blog/show.html.twig',[
            'slug' => $url
        ]);    
    }

    #[Route('/edit/{id}', name:'blog_article_edit', requirements:['id' => '\d+'])]
    public function edit($id): Response
    {
        return $this -> render('blog/edit.html.twig', [
            'slug' => $id
        ]);    
    }

    #[Route('/remove/{id}', name:'blog_article_remove', requirements:['id' => '\d+'])]
    public function remove($id): Response
    {
        return $this -> render('blog/remove.html.twig', [
            'slug' => $id
        ]);    
    }
}
