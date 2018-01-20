<?php

namespace SN\RequestParaBundle\RequestParameter;


use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;

/**
 * Interface CombinedRequestOptionsInterface
 *
 * @package SN\RequestParaBundle\RequestParameter
 */
interface CombinedRequestOptionsInterface
{

    /**
     * @throws InvalidOptionsException
     * @throws MissingOptionsException
     * @return boolean
     */
    public function combinedOptionsValid();

}