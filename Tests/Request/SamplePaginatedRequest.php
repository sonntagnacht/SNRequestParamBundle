<?php

namespace SN\RequestParamBundle\Tests\Request;

use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use SN\ToolboxBundle\Request\PaginatedGETRequestTrait;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SamplePaginatedRequest extends AbstractRequestParameter
{

    use PaginatedGETRequestTrait;

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $this->definePaginatedRequestOptions($resolver, 25, 250);
    }

}