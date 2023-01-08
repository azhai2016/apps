<?php

if (!isset($path_to_root) || isset($_GET['path_to_root']) || isset($_POST['path_to_root'])) {
    die('Restricted access');
}

include_once $path_to_root . '/AppsBase.php';
include_once $path_to_root . '/applications/setup.php';




class Apps extends AppsBase
{
    public function init(){

        parent::init();

 
        hook_invoke_all('install_tabs', $this);
 

        $this->add_application(new SetupApp());

    
      
    }
}

