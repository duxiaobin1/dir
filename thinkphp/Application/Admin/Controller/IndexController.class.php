<?php
namespace admin\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index(){
     $templateData = array(            
      'name' => 'Jack Ma',
      'sex'  => 'Male',
      'age'  => 18
       );

      $this->assign($templateData);	
      $this->display();
    }
    public function hello(){
      	echo 'hello,thinkphp!';
       $this->display('down');
    }
}