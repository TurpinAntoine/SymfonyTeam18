<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Confession;
use App\Repository\ConfessionRepository;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ConfessionRepository $confession)
    {
	    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
	    $user = $this->getUser();

	    $confessionDisplay =  $confession->findAllByUserId($user->getId());


        return $this->render('home/home.html.twig', array(
	        'user' => $user,
	        'confession' => $confessionDisplay,
        ));
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
