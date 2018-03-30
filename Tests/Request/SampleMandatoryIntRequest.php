<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleMandatoryIntRequest extends AbstractRequestParameter
{

    /**
     * @var int
     */
    protected $mandatoryInt;

    /**
     * @var int
     */
    protected $mandatoryNegativeInt;

    /**
     * @var int
     */
    protected $mandatoryIntDefault3;

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addIntParam($resolver, 'mandatoryInt', true, true, null, false);
        self::addIntParam($resolver, 'mandatoryIntDefault3', true, false, 3, true);
        self::addIntParam($resolver, 'mandatoryNegativeInt', true, false, null, false);
    }

    /**
     * @return int
     */
    public function getMandatoryInt()
    {
        return $this->mandatoryInt;
    }

    /**
     * @return int
     */
    public function getMandatoryNegativeInt()
    {
        return $this->mandatoryNegativeInt;
    }

    /**
     * @return int
     */
    public function getMandatoryIntDefault3()
    {
        return $this->mandatoryIntDefault3;
    }

}