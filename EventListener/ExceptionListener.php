<?php

namespace SN\RequestParamBundle\EventListener;


use SN\RequestParamBundle\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

class ExceptionListener
{

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        /**
         * @var $exception BadRequestHttpException;
         */
        $exception = $event->getException();

        if (false === $exception instanceof BadRequestHttpException) {
            return;
        }

        $contentType = $event->getRequest()->headers->get('Content-Type');
        if ('application/json' !== substr($contentType, 0, 16) &&
            'multipart/form-data' !== substr($contentType, 0, 19)) {
            return;
        }

        $requestHelper = $exception->getRequestHelper();

        $response = $event->getResponse();
        if (null === $response) {
            $response = new Response();
            $event->setResponse($response);
        }
        $response->headers->set('Content-Type', 'application/json');
        $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        $response->setContent(json_encode(
                array(
                    'error'  => $requestHelper->getData(),
                    'params' => $requestHelper->getParam()->getOptionsArray(true)
                )
            )
        );

    }

}