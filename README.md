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

### Example ID

`AppBundle\RequestParameter\GetUserDetails.php`

```php

namespace AppBundle\RequestParameter;
    
use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
use Symfony\Component\OptionsResolver\OptionsResolver;
    
class GetUserDetails extends AbstractRequestParameter 
{
    
    /** 
    * @var integer
    */
    protected $id;
    
    protected function setDefaultOptions (OptionsResolver $resolver) 
    {
        parent::addIntParam($resolver, 'id', true);
    }
    
    /**
    * @return integer
    */
    public function getId(){
        return = $this->id;
    }
}
```

`AppBundle\Controller\UserController.php`

```php

namespace AppBundle\Controller;
    
use AppBundle\RequestParameter\GetUserDetails;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SN\RequestParamBundle\Annotation\RequestParam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
    
class UserController extends Controller
{
    /**
    * @Route("/user/{id}/details")
    * @RequestParam("AppBundle\RequestParameter\GetUserDetails",
    *  {
    *      requestContent=true,
    *      requestBody=true,
    *      files=false
    *  })
     * @param Request $request
     * @return Response
    */
    public function getUserDetailsAction(Request $request)
    {
        /**
        * @var $parameter GetUserDetails;
        */
        $parameter = $request->get('param');
        
        $id = $parameter->getId();
        
        // ...
    }
}

```
