# SNRequestParamBundle

RequestParamBundle is an easier way to validate request data and use auto-complete request data in your IDE.

[![Version](https://img.shields.io/packagist/v/sonntagnacht/SNRequestParamBundle.svg?style=flat-square)](https://packagist.org/packages/sonntagnacht/requestparam-bundle)
[![Travis](https://img.shields.io/travis/sonntagnacht/SNRequestParamBundle.svg?style=flat-square)](https://travis-ci.org/sonntagnacht/SNRequestParamBundle)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/0347a5f5-a8d1-4639-aa72-785f60265fb9.svg?style=flat-square)](https://insight.sensiolabs.com/projects/0347a5f5-a8d1-4639-aa72-785f60265fb9)
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
