<?php
/**
 * Created by PhpStorm.
 * User: antoineturpin
 * Date: 11/05/2018
 * Time: 12:03
 */

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{

	/**
	 * @Route("/register", name="user_registration")
	 * @param Request $request
	 * @param UserPasswordEncoderInterface $passwordEncoder
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
	public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
	{
		// 1) build the form
		$user = new User();
		$form = $this->createForm(UserType::class, $user);

		// 2) handle the submit (will only happen on POST)
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

			// 3) Encode the password (you could also do this via Doctrine listener)
			$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
			$user->setPassword($password);

			// 4) save the User!
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);
			$entityManager->flush();

			// ... do any other work - like sending them an email, etc
			// maybe set a "flash" success message for the user

			return $this->redirectToRoute('all_user');
		}

		return $this->render(
			'registration/register.html.twig',
			array('form' => $form->createView())
		);
	}
}