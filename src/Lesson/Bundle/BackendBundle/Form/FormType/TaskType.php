<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/31/15
 * Time: 8:43 AM
 */

namespace Lesson\Bundle\BackendBundle\Form\FormType;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lesson\Bundle\BackendBundle\Entity\Task;

/**
 * Class TaskType
 * @package Lesson\Bundle\BackendBundle\Form\FormType
 */
class TaskType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options = array())
    {
        $builder
            ->add('text')
            ->add('enabled');


    }

    /**
     * @return string
     */
    public function getName()
    {
        return "";
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
           "data_class" => Task::class
        ));
    }


}