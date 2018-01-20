<?php

namespace SN\RequestParamBundle\EventListener;


use Doctrine\Common\Annotations\AnnotationReader;
use SN\RequestParamBundle\Annotation\RequestParam;
use SN\RequestParamBundle\Helper\RequestParamHelper;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class RequestListener
{
    /**
     * @var AnnotationReader
     */
    private $reader;

    public function __construct()
    {
        $this->reader = new AnnotationReader();
    }

    public function onKernelController(FilterControllerEvent $event)
    {

        $reflectionObject = new \ReflectionClass($event->getController()[0]);
        $reflectionMethod = $reflectionObject->getMethod($event->getController()[1]);
        /**
         * @var $annotation RequestParam
         */
        $annotation = $this->reader->getMethodAnnotation($reflectionMethod, RequestParam::class);
        if ($annotation !== null) {
            $requestClass = $annotation->getRequestClass();
            $param = RequestParamHelper::parse(
                $event->getRequest(),
                new $requestClass,
                $annotation->isRequestContent(),
                $annotation->isRequestBody(),
                $annotation->isFiles());
            $event->getRequest()->attributes->add(array('param' => $param));
        }

    }
}