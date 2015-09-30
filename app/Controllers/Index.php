<?php 
namespace App\Controllers;

use Memo\Controller;

class Index extends Controller 
{
    public function indexGet()
    {
        $this->view->setTemplate("index");
        $this->view->assign("title", "Hello, Memo");
        return $this->bindOutput($this->view->render());
    }
}
