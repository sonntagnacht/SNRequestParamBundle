<?php

namespace SN\RequestParamBundle\Tests\Request;


use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SampleIdRequest extends AbstractRequestParameter
{
    protected $id;

    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        self::addIntParam($resolver, 'id', true);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}