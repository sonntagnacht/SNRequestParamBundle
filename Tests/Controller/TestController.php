<?php

namespace SN\RequestParamBundle\Tests\Controller;


use SN\RequestParamBundle\Annotation\RequestParam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SN\RequestParamBundle\Tests\Request\SampleIdRequest;

class TestController extends Controller
{
    /**
     * @Route(methods={"GET"}, path="/test/{id}")
     * @RequestParam(SampleIdRequest::class)
     * @param Request $request
     * @return Response
     */
    public function testAction(Request $request)
    {
        /**
         * @var $param SampleIdRequest;
         */
        $param = $request->get('param');

        return new Response(
            $param->getId()
        );
    }

}