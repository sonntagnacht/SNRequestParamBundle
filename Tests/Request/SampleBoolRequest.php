<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleBoolRequest extends AbstractRequestParameter
{

    /**
     * @var int
     */
    protected $optionalBool;

    /**
     * @var int
     */
    protected $mandatoryBool;

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addBooleanParam($resolver, 'optionalBool', false, true);
        self::addBooleanParam($resolver, 'mandatoryBool', true);
    }

    /**
     * @return int
     */
    public function getOptionalBool()
    {
        return $this->optionalBool;
    }

    /**
     * @return int
     */
    public function getMandatoryBool()
    {
        return $this->mandatoryBool;
    }

}