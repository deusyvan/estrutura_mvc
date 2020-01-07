<?php 
class HomeController extends Controller{
    
    public function index(){
        $array = array();
        $usuarios = new Usuarios();
        $array['lista'] = $usuarios->getAll();
        
        $this->loadTemplate('home', $array);
    }
}
