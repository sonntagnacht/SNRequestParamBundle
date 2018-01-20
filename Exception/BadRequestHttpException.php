<?php

namespace SN\RequestParaBundle\Exception;

use SN\RequestParaBundle\Helper\RequestParaHelper;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException as BaseException;

/**
 * Class BadRequestHttpException
 *
 * @package SN\ToolboxBundle\Exception
 */
class BadRequestHttpException extends BaseException
{

    /**
     * @var RequestParaHelper
     */
    protected $requestHelper;

    /**
     * @return RequestParaHelper
     */
    public function getRequestHelper()
    {
        return $this->requestHelper;
    }

    /**
     * @param RequestParaHelper $requestHelper
     */
    public function setRequestHelper(RequestParaHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

}