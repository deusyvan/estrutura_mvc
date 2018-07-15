<?php 
class homeController extends controller{
    
    public function index(){
        
        $dados = array(
           'quanitdade' => 5 
        );
      
        $this->loadView('home', $dados);
        
    }
   
}

?>