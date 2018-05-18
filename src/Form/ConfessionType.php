<?php

namespace App\Form;

use App\Entity\Confession;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ConfessionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title', TextType::class)
			->add('text', TextType::class)
		;
	}
}