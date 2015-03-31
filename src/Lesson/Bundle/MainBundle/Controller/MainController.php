<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/13/15
 * Time: 5:05 PM
 */

namespace Lesson\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class MainController
 * @package Lesson\Bundle\MainBundle\Controller
 */
class MainController extends Controller
{

    /**
     * @return Response
     */
    public function homeAction()
    {
        return $this->render("LessonMainBundle:Main:home.html.twig");
    }
}