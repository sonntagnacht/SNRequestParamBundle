<?php

namespace SN\RequestParaBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SN\RequestParaBundle\Annotation as SN;
use SN\RequestParaBundle\Tests\Request\TestRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/request", name="request_bundle_test")
     * @SN\RequestPara("SN\RequestParaBundle\Tests\Request\TestRequest")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var $param TestRequest
         */
        $param = $request->get('para');
        return new Response(sprintf('ID: %s', $param->getId()));
    }
}
