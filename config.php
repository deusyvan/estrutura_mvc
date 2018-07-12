<?php 
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    
} else {
    
}

try {
    
} catch ( PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>