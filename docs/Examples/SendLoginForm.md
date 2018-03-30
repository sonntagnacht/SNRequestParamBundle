# Send login form

## AppBundle\RequestParameter\UserLogin.php
   
   ```php
   namespace AppBundle\RequestParameter;
   
   use SN\RequestParamBundle\RequestParameter\AbstractRequestParameter;
   
   class UserDetail extends AbstractRequestParameter 
   {
   
       /**
       * @var string
       */
       protected $username;
   
       /**
       * @var string
       */
       protected $password;
       
       protected function setDefaultOptions (OptionsResolver $resolver) 
       {
           parent::addStringParam($resolver, 'username', true);
           parent::addStringParam($resolver, 'password', true);
       }
       
       /**
       * @return string
       */
       public function getUsername(): string 
       {
           return = $this->username;
       }
       
       /**
       * @return string
       */
       public function getPassword(): string
       {
           return = $this->password;
       }
   }
   ```
   
## AppBundle\Controller\UserController.php
   
   ```php
   namespace AppBundle\Controller;
   
   use AppBundle\RequestParameter\UserLogin;
   use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
   use SN\RequestParamBundle\Annotation\RequestParam;
   use Symfony\Bundle\FrameworkBundle\Controller\Controller;
   use Symfony\Component\HttpFoundation\Request;
   use Symfony\Component\HttpFoundation\Response;
   
   class UserController {
   
       /**
       * @Route("/user/login")
       * @RequestParam(UserLogin::class, requestBody=true)
       * @param Request
       * @return Response
       */
       public function getUserDetailAction(Request $request) {
           /**
           * @var $paramter UserLogin
           */
           $parameter = $request->get('param');
           
           $username = $parameter->getUsername();
           $password = $parameter->getPassword();
           
           /** some other code */
       }
   
   }
   ```