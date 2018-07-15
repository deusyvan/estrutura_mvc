<?php 
class homeController extends controller{
    
    public function index(){
        
        $dados = array(
           'quantidade' => 5,
            'nome' => 'Deusyvan',
            'idade' => '45'
        );
      
        $this->loadView('home', $dados);
        
    }
   
}

?>