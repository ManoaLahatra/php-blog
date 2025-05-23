<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentForm extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
	{
		$builder
			->add('author', TextType::class, [
				'label' => 'Votre nom',
				'attr' => [
					'class' => 'form-control',
					'placeholder' => 'Votre nom',
					'required' => true
				]
			])
			->add('content', TextareaType::class, [
				'label' => 'Votre commentaire',
				'attr' => [
					'class' => 'form-control',
					'rows' => 4,
					'placeholder' => 'Écrivez votre commentaire ici...',
					'required' => true
				]
			]);
	}

	public function configureOptions(OptionsResolver $resolver): void
	{
		$resolver->setDefaults([
			'data_class' => Comment::class,
		]);
	}
}