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
function validationErros($errors){
    if(isset($errors)){
    $notification='';
        foreach($errors as $key=>$value){
            $notification.= '<div>';
            $notification.= $key.':'. $value;
            $notification.= '</div>';
        }
    return $notification;
    }
}
function matchError($filename,$error){
    return match($error){
        UPLOAD_ERR_NO_FILE=>"Não foi encaminhado nenhum arquivo",
        UPLOAD_ERR_INI_SIZE,UPLOAD_ERR_FORM_SIZE => $filename." Maior que o limite aceito",
        UPLOAD_ERR_CANT_WRITE => "Não foi possível gravar $filename no disco", 
        default => "Erro desconhecido",
    };
}