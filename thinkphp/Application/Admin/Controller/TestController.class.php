<?php
namespace Admin\Controller;

use Think\Controller;

  class testController extends Controller {
    
     public function index() {
		 
     echo 111;
         
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