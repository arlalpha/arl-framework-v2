<?php 
//path configuration

//get content properties
$properties =  json_decode(file_get_contents( dirname(dirname(dirname(__FILE__))) . DS ."properties.json"),false);

$root_directory_name = basename(dirname(dirname(__DIR__)));

switch($properties->platform->environment){
    
    case 'local':
        $config = [
            "PAGE" => APPLICATION_PATH. DS . "page" . DS,
            "LIB" => DS . $root_directory_name . DS . "app" . DS . "libraries" . DS,
            "RES" => DS . $root_directory_name . DS . "app" . DS . "resources" . DS,
            "FS" => DS . $root_directory_name . DS . "app" . DS . "storage" . DS,
            "FSV" => DS . $root_directory_name . DS . "app" . DS . "storage" . DS,
        ];
        break;
    case 'production':
        $config = [
            "PAGE" => APPLICATION_PATH. DS . "page" . DS,
            "LIB" =>  DS . "app" . DS . "libraries" . DS,
            "RES" =>  DS . "app" . DS . "resources" . DS,
            "FS" => APPLICATION_PATH . DS . "app" . DS . "storage" . DS,
            "FSV" =>  DS . "app" . DS . "storage" . DS,
        ];
        break;
}



?>