<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleStringListRequest extends AbstractRequestParameter
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
        self::addStringListParameter($resolver, 'optionalStringList');
        self::addStringListParameter($resolver, 'mandatoryStringList', true);
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