<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
        //je cree ma route home
    /**
     * @Route("/homePage", name="homePage")
     */
    public function homePage(UsersRepository $usersRepository)
    {
        
        $users = $usersRepository->findAll();
        //je cree une variable qui me selectionne les 2 premiers profile de mon array $users.
        
        return $this->render('homePage.html.twig',
            [
//                'users'=>$this->users,
                'users'=>$users 
                
            ]
        );
    }

    //--------------------------------------------------------------------------------------------------
    //je cree ma route contact
    /**
     * @Route("/contact",name="contact_page")
     */
    public function contact(UsersRepository $usersRepository){

        $users = $usersRepository->findAll();

        return $this->render('contactPage.html.twig',
            [
                'users'=>$users 
            ]
        );
    }
    //--------------------------------------------------------------------------------------------------
    //je cree ma route list
    /**
     * @Route("/list",name="list_page")
     */
    public function list(UsersRepository $usersRepository){

        $users = $usersRepository->findAll();

        return $this->render('listPage.html.twig',
            [
                'users'=>$users
            ]
        );
    }
    //--------------------------------------------------------------------------------------------------
    //je cree ma route profile
    /**
     * @Route("/profile/{id}",name="profile_page")
     */
    public function profile(UsersRepository $usersRepository, $id){

        $users = $usersRepository->findAll();

        $user = $usersRepository->find($id);

        return $this->render('profilePage.html.twig',
            [
                'users'=>$users,
                'user'=>$user
            ]
        );
    }

}