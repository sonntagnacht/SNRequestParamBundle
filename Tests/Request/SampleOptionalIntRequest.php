<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleOptionalIntRequest extends AbstractRequestParameter
{

    /**
     * @var int
     */
    protected $optionalInt;

    /**
     * @var int
     */
    protected $optionalNegativeInt;

    /**
     * @var int
     */
    protected $optionalIntDefault3 = 3;

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addIntParam($resolver, 'optionalInt', false, true, null, false);
        self::addIntParam($resolver, 'optionalIntDefault3', false, false, 3, false);
        self::addIntParam($resolver, 'optionalNegativeInt', false, false, null, false);
    }

    /**
     * @return int
     */
    public function getOptionalInt()
    {
        return $this->optionalInt;
    }
    /**
     * @return int
     */
    public function getOptionalNegativeInt()
    {
        return $this->optionalNegativeInt;
    }

    /**
     * @return int
     */
    public function getOptionalIntDefault3()
    {
        return $this->optionalIntDefault3;
    }

}