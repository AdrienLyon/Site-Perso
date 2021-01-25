<?php

require_once('controller/frontend.php');
$frontendController = new FrontendController();

try {
    if (isset($_GET['action'])) {  

        if ($_GET['action'] == 'main') {        
            $frontendController->main();
        } 
        
    }    
    else {
        $frontendController->main();
    }
}
catch(Exception $e) {
       echo 'Exception reçue : ';
}
