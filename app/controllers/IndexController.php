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
        
        $name = "Test name";
        $authTitle = "You can authorized by link:";
        $this->view->setVar('name', $name);
        $this->view->setVar('authTitle', $authTitle );
        $this->view->setVar('users',
            array(
                "a" => "test1",
                "b" => "test2",
                "c" => "test3",
                "d" => "test4",
                "e" => "test5",
            )
        );
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