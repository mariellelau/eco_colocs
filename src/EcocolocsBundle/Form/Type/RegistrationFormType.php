<?php

namespace EcocolocsBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Ton prénom',
                'required' => true))
            ->add('motDePasse', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Les 2 mots de passe doivent être identiques',
                'required' => true,
                'first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Répéter le mot de passe')))
            ->add('mail', EmailType::class, array(
                'label' => 'Adresse email',
                'required' => true,
                'mapped' => false
            ))
            ->add('colocation', EntityType::class, array (
                'class' => 'EcocolocsBundle\Entity\Colocation',
                'required' => true,
                'choice_label' => 'nom',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EcocolocsBundle\Entity\User',
            'csrf_token_id' => 'registration'));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
}
