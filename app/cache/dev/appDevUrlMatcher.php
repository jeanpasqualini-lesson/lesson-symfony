<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/api/v1/tasks')) {
            // get_task
            if (preg_match('#^/api/v1/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_task')), array (  '_controller' => 'Lesson\\Bundle\\BackendBundle\\Controller\\TasksController::getTaskAction',  '_format' => NULL,));
            }
            not_get_task:

            // post_task
            if (preg_match('#^/api/v1/tasks(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_task')), array (  '_controller' => 'Lesson\\Bundle\\BackendBundle\\Controller\\TasksController::postTaskAction',  '_format' => NULL,));
            }
            not_post_task:

            // delete_task
            if (preg_match('#^/api/v1/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_task')), array (  '_controller' => 'Lesson\\Bundle\\BackendBundle\\Controller\\TasksController::deleteTaskAction',  '_format' => NULL,));
            }
            not_delete_task:

            // put_task
            if (preg_match('#^/api/v1/tasks/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_put_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_task')), array (  '_controller' => 'Lesson\\Bundle\\BackendBundle\\Controller\\TasksController::putTaskAction',  '_format' => NULL,));
            }
            not_put_task:

            // get_tasks
            if (preg_match('#^/api/v1/tasks(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_tasks;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tasks')), array (  '_controller' => 'Lesson\\Bundle\\BackendBundle\\Controller\\TasksController::getTasksAction',  '_format' => NULL,));
            }
            not_get_tasks:

        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Lesson\\Bundle\\FrontendBundle\\Controller\\HomeController::viewAction',  '_route' => 'home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
