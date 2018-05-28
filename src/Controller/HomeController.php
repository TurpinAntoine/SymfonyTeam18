<?php

namespace App\Controller;

use App\Repository\UserRepository;
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
	 * @param UserRepository $userRepo
	 * @param \Swift_Mailer $mailer
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function index(ConfessionRepository $confession, UserRepository $userRepo, \Swift_Mailer $mailer)
    {
	    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
	    $user = $this->getUser();

	    //Save last connection
	    $today = new \DateTime();

	    $entityManager = $this->getDoctrine()->getManager();
	    $entityManager->persist($user->setLastConnection($today));
	    $entityManager->flush();

	    $confessionDisplay =  $confession->findAllByUserId($user->getId());

	    //Email if all user that didn't connect since one week
	    $limit = new \DateTime();
	    $limit->modify('-1 week');

	    //If last connection is older than 1 week, send email
	    /*$em = $this->getDoctrine()->getManager();*/
	    $lastConnection = $userRepo->findAllUserByLimit($limit);

	    $allConf = [];
	    foreach($lastConnection as $key=>$lc)
	    {
		    $allConf[$key] = $confession->findConfessionsByUserId($lc->getId());
	    }


	    if(!$lastConnection == false)
	    {
	    		foreach($allConf as $key => $conf)
	    		{
				    $i = 0;
	    			if (isset($conf[$i]))
				    {
				    	

					    $message = (new \Swift_Message('My confessions'))
						    ->setFrom('send@example.com')
						    ->setTo($conf[$i]->getBelongsto()->getContact())
						    ->setBody("hello")
						    ->addPart(
							    $this->renderView(
								    'home/mail.html.twig',
								    array('user' => $user, 'confession' => $conf)
							    )
						    )

					    ;

					    $mailer->send($message);
					    $i++;
				    }



			    }

	    }



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
	 * @Route("/home/mail", name="mail")
	 * @param UserRepository $user
	 * @param ConfessionRepository $confession
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 *
	 */
	public function mail(UserRepository $user, ConfessionRepository $confession)
	{
		$today = new \DateTime();
		$limit = new \DateTime();
		$limit->modify('-1 week');


		//If last connection is older than 1 week, send email
		$entityManager = $this->getDoctrine()->getManager();
		$lastConnection = $user->findAllUserByLimit($limit);
		$allConf = [];
		foreach($lastConnection as $key=>$lc)
		{
			$allConf[$key] = $confession->findConfessionsByUserId($lc->getId());
		}


		return $this->render('home/mail.html.twig', array(
			'connect' => $lastConnection,
			'conf' => $allConf,
		));
	}
}
