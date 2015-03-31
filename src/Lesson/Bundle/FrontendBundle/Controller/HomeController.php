<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/23/15
 * Time: 5:09 AM
 */

namespace Lesson\Bundle\FrontendBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HomeController
 * @package Lesson\Bundle\FrontendBundle\Controller
 */
class HomeController extends Controller {

    /**
     *
     */
    public function viewAction()
    {
        return $this->render("LessonFrontendBundle:Home:view.html.twig");
    }
}