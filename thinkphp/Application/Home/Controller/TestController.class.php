<?php
namespace Home\Controller;

use Think\Controller;

  class testController extends Controller {
    
     public function index() {
		 
       $templateData = array(
             'name' => 'Jack Ma',
             'sex'  => 'Male',
            'age'  => 18
       );
        $this->assign($templateData);
 
        $this->display();
     }
      public function show() {
     
       $templateData = array(
             'name' => 'Jack Ma',
             'sex'  => 'Male',
            'age'  => 18
       );
        $this->assign($templateData);
 
        $this->display();      
     }
 }
 ?>