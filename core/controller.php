<?php 
class controller {
    
    public function loadView($viewName, $viewData = array()){
        
        require 'views/'.$viewName.'.php';
        
    }
}
