  <?php
  namespace Index\Controller;
  use Think\Controller;
  class TestController extends Controller {
     //http://localhost:81/research/thinkphp_3.2.3_full/index.php/Home/TmplTest/show
     public function index() {
       $templateData = array(
             'name' => 'Jack Ma',
             'sex'  => 'Male',
            'age'  => 18
       );
 
        $this->assign($templateData);
 
        $this->display();
         /*
         $this->display()相当于$this->display('TmplTest:show');
         */
     }
 }
 ?>