# SNRequestParamBundle

RequestParamBundle is an easier way to validate request data and use auto-complete request data in your IDE.

[![Travis](https://img.shields.io/travis/sonntagnacht/SNRequestParamBundle.svg?style=flat-square)](https://travis-ci.org/sonntagnacht/SNRequestParamBundle)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/0347a5f5-a8d1-4639-aa72-785f60265fb9.svg?style=flat-square)](https://insight.sensiolabs.com/projects/cfc8a6a7-c79e-47c6-8ba3-ca06ab51bd7f)
[![Coveralls](https://img.shields.io/coveralls/sonntagnacht/SNRequestParamBundle.svg?style=flat-square)](https://coveralls.io/r/sonntagnacht/SNRequestParamBundle?branch=master)

## Installation

Run `composer require sonntagnacht/requestparam-bundle` to use SNRequestParamBundle in your Symfony Project.

## Configuration

`AppKernel.php`

```php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            // ...
            new SN\RequestParamBundle\SNRequestParamBundle(),
            // ...
            
        return $bundles;
    }
    // ...
}
```

## Examples

- [Get user by id](./docs/Examples/GetObjectById.md)
- [Send login form](./docs/Examples/SendLoginForm.md)
