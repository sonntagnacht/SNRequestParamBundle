<?php

namespace SN\RequestParaBundle;

use SN\RequestParaBundle\DependencyInjection\RequestParaExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SNRequestParaBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new RequestParaExtension();
    }
}
