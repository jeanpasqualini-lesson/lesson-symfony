<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/31/15
 * Time: 3:18 AM
 */

namespace Lesson\Bundle\BackendBundle\EventListener;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class JsonRequestListener
 * @package Lesson\Bundle\BackendBundle\EventListener
 */
class JsonRequestListener
{

    /**
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        if ('json' === $request->getContentType()) {
            $data = json_decode($request->getContent(), true);

            if ($data === null || json_last_error() !== JSON_ERROR_NONE) {
                $event->setResponse(Response::create("Unable to parse request.", Response::HTTP_BAD_REQUEST));
            } else {
                $request->request->replace($data);
            }
        }
    }
}