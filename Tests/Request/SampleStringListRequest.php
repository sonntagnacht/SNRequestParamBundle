<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleStringListRequest extends AbstractRequestParameter
{
    /**
     * @var array
     */
    protected $mandatoryStringList;

    /**
     * @var array
     */
    protected $optionalStringList;

    /**
     * @var array
     */
    protected $notStringList;

    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addStringListParameter($resolver, 'optionalStringList');
        self::addStringListParameter($resolver, 'mandatoryStringList', true);
        self::addStringListParameter($resolver, 'notStringList');
    }

    /**
     * @return array
     */
    public function getMandatoryStringList()
    {
        return $this->mandatoryStringList;
    }

    /**
     * @return array
     */
    public function getOptionalStringList()
    {
        return $this->optionalStringList;
    }

    /**
     * @return array
     */
    public function getNotStringList()
    {
        return $this->notStringList;
    }

}