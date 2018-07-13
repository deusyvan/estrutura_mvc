<?php 

class Core {
    
    public function run(){
        
        $url = '/';
        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        
        if (!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);
            
            $currentController = $url[0].'Controller';
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        
        echo 'CONTROLLER: '.$currentController.'<BR/>';
        echo "ACTION: ".$currentAction.'<BR/>';
        
    }
}
