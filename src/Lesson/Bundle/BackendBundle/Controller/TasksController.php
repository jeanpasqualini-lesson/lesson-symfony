<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 9:52 PM
 */

namespace Lesson\Bundle\BackendBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Lesson\Bundle\BackendBundle\Entity\Task;
use Lesson\Bundle\BackendBundle\Form\FormType\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TasksController
 * @package Lesson\Bundle\BackendBundle\Controller
 */
class TasksController extends FOSRestController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getTaskAction($id)
    {
         $task = new Task();

         $task->setText("lol");

         $data = $task;

         $view = $this->view($data);

         return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postTaskAction(Request $request)
    {
        $form = $this->createForm(new TaskType());

        $form->submit($request);

        $task = $form->getData();

        $em = $this->getDoctrine()->getManager();

        $em->persist($task);

        $em->flush();

        $view = $this->view(array(
            "success" => true
        ));

        return $this->handleView($view);
    }

    public function deleteTaskAction($id)
    {
        $view = $this->view(array(
            "success" => true
        ));

        $em = $this->getDoctrine()->getManager();

        $em->remove($em->getReference(Task::class, $id));

        $em->flush();

        return $this->handleView($view);
    }

    public function putTaskAction(Request $request, $id)
    {
        $view = $this->view(array(
            "success" => true
        ));

        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new TaskType());

        $form->submit($request);

        $task = $form->getData();

        $em->persist($task);

        $em->flush();

        return $this->handleView($view);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getTasksAction()
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository("LessonBackendBundle:Task")->findAll();

        $view = $this->view($data);

        return $this->handleView($view);
    }
}