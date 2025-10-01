<?php


function url_to(string $destino, ?array $params = null){

    
    $url ='http://localhost'.BASE_PATH.'/'.$destino;
    if($params !=null){
        foreach($params as $param){
            $url .='/'. $param;
        }
    }
    return $url; 

}