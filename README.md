# SNRequestParamBundle

RequestParamBundle is an easier way to validate request data and use auto-complete request data in your IDE.

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
