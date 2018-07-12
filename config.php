<?php 
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
    
} else {
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
}

try {
    
} catch ( PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>