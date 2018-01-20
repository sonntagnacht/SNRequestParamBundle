<?php

namespace SN\RequestParaBundle\Tests\Request;


use SN\RequestParaBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestRequest extends AbstractRequestParameter
{
    protected $id;

    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        parent::addIntParam($resolver, 'id', false);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

}