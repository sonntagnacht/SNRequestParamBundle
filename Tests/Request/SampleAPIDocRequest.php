<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleAPIDocRequest extends AbstractRequestParameter
{

    /**
     * @var string
     */
    protected $_format;

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        self::setApiDocDefaults($resolver);
    }

}