<?php

namespace App\Controller;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Confession;
use App\Repository\ConfessionRepository;

class HomeController extends Controller
{
	/**
	 * @Route("/home", name="home")
	 * @param ConfessionRepository $confession
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function index(ConfessionRepository $confession)
    {
	    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
	    $user = $this->getUser();

	    //Save last connection
	    $lastConnection = new \DateTime();

	    $entityManager = $this->getDoctrine()->getManager();
	    $entityManager->persist($user->setLastConnection($lastConnection));
	    $entityManager->flush();

	    $confessionDisplay =  $confession->findAllByUserId($user->getId());


        return $this->render('home/home.html.twig', array(
	        'user' => $user,
	        'confession' => $confessionDisplay,
        ));
    }


	/**
	 * @param $id
	 *
	 * @param ConfessionRepository $confession
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @Route("/delete/{id}", name="delete")
	 */
	public function ajax($id, ConfessionRepository $confession)
	{
		$em = $this->getDoctrine()->getManager();
		$conf = $confession->findOneBy(array("id" => $id));
		$em->remove($conf);
		$em->flush();

		return $this->redirectToRoute('home');
	}

	/**
	 * @Route("/create-confession", name="create-confession")
	 */
	public function createConfession()
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$user = $this->getUser();

		return $this->render('confession/addConfession.html.twig', array(
			'user' => $user,
		));
	}
}
