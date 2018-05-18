<?php

namespace App\Controller;

use App\Form\ConfessionType;
use App\Entity\User;
use App\Entity\Confession;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ConfessionController extends Controller
{

	/**
	 * @Route("/createConfession", name="createConfession")
	 * @param Request $request
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
	public function new(Request $request)
	{
		// creates a task and gives it some dummy data for this example
		$confession = new Confession();
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$user = $this->getUser();

		$form = $this->createFormBuilder($confession)
		             ->add('title', TextType::class)
		             ->add('text', TextareaType::class)
		             ->add('belongsto', HiddenType::class)
		             ->add('save', SubmitType::class, array('label' => 'Create confession'))
		             ->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			// $form->getData() holds the submitted values
			// but, the original `$task` variable has also been updated
			$confession = $form->getData();
			// ... perform some action, such as saving the task to the database
			// for example, if Task is a Doctrine entity, save it!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($confession);
			$entityManager->flush();

			return $this->redirectToRoute('home');
		}

		return $this->render('confession/addConfession.html.twig', array(
			'form' => $form->createView(),
			'user' => $user,
		));
	}

}