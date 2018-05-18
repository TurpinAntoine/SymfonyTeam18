<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);

    }

	/**
	 * @Route("/user/all", name="all_user")
	 */
	public function show_all()
	{
		$name = "Antoine";

		$user = $this->getDoctrine()
		                 ->getRepository(User::class)
		                 ->findAllUserEqualTo($name);

		return $this->render('user/showAll.html.twig', ['user' => $user]);
	}

	/**
	 * @Route("/user/{id}", name="user_show")
	 * @param $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->getDoctrine()
		                ->getRepository(User::class)
		                ->find($id);

		if (!$user) {
			throw $this->createNotFoundException(
				'No product found for id '.$id
			);
		}

		return $this->render('user/show.html.twig', ['user' => $user]);

		// or render a template
		// in the template, print things with {{ user.name }}
		// return $this->render('user/show.html.twig', ['user' => $user]);
	}

	/**
	 * @Route("/user/edit/{id}", name="user_edit")
	 * @param $id
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function update($id)
	{
		$entityManager = $this->getDoctrine()->getManager();
		$user = $entityManager->getRepository(User::class)->find($id);

		if (!$user) {
			throw $this->createNotFoundException(
				'No user found for id '.$id
			);
		}

		$user->setName('New user name!');
		$entityManager->flush();

		return $this->redirectToRoute('user_show', [
			'id' => $user->getId()
		]);
	}
}
