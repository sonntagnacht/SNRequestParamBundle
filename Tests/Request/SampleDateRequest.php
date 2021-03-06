<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleDateRequest extends AbstractRequestParameter
{

    /**
     * @var \DateTime
     */
    protected $date;


    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addDateParam($resolver, 'date', true);
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

}