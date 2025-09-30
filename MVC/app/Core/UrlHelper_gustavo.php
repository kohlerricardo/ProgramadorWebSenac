<?php

function url_to(string $destino, array $param=null)
{
  
  $url = BASE_PATH .  $destino;

  if(empty($param))
  {
    return $url;
  }

  foreach($param as $p)
  {
    $url.= '/' . $p;
  }

  return $url;

}




?>