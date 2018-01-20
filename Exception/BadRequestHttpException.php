<?php

namespace SN\RequestParamBundle\Exception;

use SN\RequestParamBundle\Helper\RequestParamHelper;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException as BaseException;

/**
 * Class BadRequestHttpException
 *
 * @package SN\ToolboxBundle\Exception
 */
class BadRequestHttpException extends BaseException
{

    /**
     * @var RequestParamHelper
     */
    protected $requestHelper;

    /**
     * @return RequestParamHelper
     */
    public function getRequestHelper()
    {
        return $this->requestHelper;
    }

    /**
     * @param RequestParamHelper $requestHelper
     */
    public function setRequestHelper(RequestParamHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

}