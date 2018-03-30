# Get an object by id

If you call `/user/2/detail` your action will be run. But if you call `/user/nick/detail` you will get a HTTP-Response with code 400 and information about how you have to call this action.

## AppBundle\RequestParameter\UserDetail.php

```php
namespace AppBundle\RequestParameter;

use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;

class UserDetail extends AbstractRequestParameter 
{

    /**
    * @var int
    */
    protected $id;
    
    protected function setDefaultOptions (OptionsResolver $resolver) 
        {
            parent::addIntParam($resolver, 'id', true);
        }
        
        /**
        * @return integer
        */
        public function getId(): int{
            return = $this->id;
        }
}
```

## AppBundle\Controller\UserController.php

```php
namespace AppBundle\Controller;

use AppBundle\RequestParameter\UserDetail;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SN\RequestParamBundle\Annotation\RequestParam;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController {

    /**
    * @Route("/user/{id}/details")
    * @RequestParam(UserDetail::class)
    * @param Request
    * @return Response
    */
    public function getUserDetailAction(Request $request) {
        /**
        * @var $paramter UserDetail
        */
        $parameter = $request->get('param');
        
        $id = $parameter->getId();
        
        /** some other code */
    }

}
```