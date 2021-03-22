<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DashboardController extends AbstractController
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @Route("/dashboard", name="dashboard")
     * Method({"GET"})
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(User::class);

        $users = $repository->findAll();

        $admin = $repository->findOneBy(['firstName' => "admin"]);

        return $this->render('dashboard/index.html.twig', [
            'users' => $users,
            'admin' => $admin
        ]);
    }

    /**
     * @Route("/dasboard/user/{id}", name="delete_user")
     * @param $id
     * Method({"GET", "POST"})
     * @return RedirectResponse
     */
    public function removeUserById($id): RedirectResponse
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->find($id);

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->remove($user);
        $entityManager->flush();

        return new RedirectResponse($this->urlGenerator->generate('dashboard'));
    }

}
