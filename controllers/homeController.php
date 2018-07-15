<?php 
class homeController extends controller{
    
    public function index(){
        $anuncios = new Anuncios(); 
        $dados = array(
           'quantidade' => $anuncios->getQuantidade(),
            'nome' => 'Deusyvan',
            'idade' => '45'
        );
      
        $this->loadTemplate('home', $dados);
        
    }
   
}

?>