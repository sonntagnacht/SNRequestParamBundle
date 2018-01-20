<?php
/**
 * Created by PhpStorm.
 * User: thhan
 * Date: 16.01.2018
 * Time: 22:51
 */

namespace SN\RequestParaBundle\EventListener;


use Doctrine\Common\Annotations\AnnotationReader;
use SN\RequestParaBundle\Annotation\RequestPara;
use SN\RequestParaBundle\Helper\RequestParaHelper;
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
         * @var $annotation RequestPara
         */
        $annotation = $this->reader->getMethodAnnotation($reflectionMethod, RequestPara::class);
        if ($annotation !== null) {
            $requestClass = $annotation->getRequestClass();
            $param = RequestParaHelper::parse(
                $event->getRequest(),
                new $requestClass,
                $annotation->isRequestContent(),
                $annotation->isRequestBody(),
                $annotation->isFiles());
            $event->getRequest()->attributes->add(array('para' => $param));
        }

    }
}