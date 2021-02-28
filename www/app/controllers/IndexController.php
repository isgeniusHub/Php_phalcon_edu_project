<?php

//use Phalcon\Mvc\Controller;

class IndexController extends BaseController
{
    /*public function onConstruct()
    {
        echo "construct<br>";
    }
    */
    public function initialize ()
    {
        parent::initialize();
        echo "initialize IndexController<br>";
    }

    public function indexAction ()
    {
        // echo "indexAction<br>";
        // $this->getParams();

        $this->view->users = Users::find();
    }
    
   /* public function getParams ($param = "TEST")
    {
        echo "Параметр равен {$param}<br>";
    }*/

    public function testAction ()
    {
        $this->view->disable();
        echo "test json data<br>";
    }
}
