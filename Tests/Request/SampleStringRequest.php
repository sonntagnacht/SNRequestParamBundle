<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleStringRequest extends AbstractRequestParameter
{
    /**
     * @var string
     */
    protected $mandatoryString;

    /**
     * @var string
     */
    protected $optionalString;

    /**
     * @var string
     */
    protected $defaultString;

    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addStringParam($resolver, "mandatoryString", true);
        self::addStringParam($resolver, "optionalString", false);
        self::addStringParam($resolver, "defaultString", false, "abc");
    }

    /**
     * @return string
     */
    public function getMandatoryString()
    {
        return $this->mandatoryString;
    }

    /**
     * @return string
     */
    public function getOptionalString()
    {
        return $this->optionalString;
    }

}