<?php

namespace SN\RequestParamBundle;

use SN\RequestParamBundle\DependencyInjection\RequestParaExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SNRequestParamBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new RequestParaExtension();
    }
}
