<?php 

class Core {
    
    public function run(){
        
        $url = '/';
        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        
        if (!empty($url) && $url != '/'){
            $url = explode('/', $url);
            
            print_r($url);
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        
    }
}
