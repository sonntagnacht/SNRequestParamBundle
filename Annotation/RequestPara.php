<?php

namespace SN\RequestParaBundle\Annotation;

/**
 * Class Request
 * @Annotation
 * @package SN\RequestParaBundle\Annotation
 */
class RequestPara
{
    private $requestClass;

    private $requestContent = false;

    private $requestBody = false;

    private $files = false;

    public function __construct($options)
    {
        if (isset($options['value'])) {
            $options['requestClass'] = $options['value'];
            unset($options['value']);
        }

        foreach ($options as $key => $value) {
            if (!property_exists($this, $key)) {
                throw new \InvalidArgumentException(sprintf('Property "%s" does not exist', $key));
            }

            $this->$key = $value;
        }
    }

    /**
     * @return string
     */
    public function getRequestClass()
    {
        return $this->requestClass;
    }

    /**
     * @return bool
     */
    public function isRequestContent()
    {
        return $this->requestContent;
    }

    /**
     * @return bool
     */
    public function isRequestBody()
    {
        return $this->requestBody;
    }

    /**
     * @return bool
     */
    public function isFiles()
    {
        return $this->files;
    }
}