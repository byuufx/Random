<?php


/**
 * Whatsapp
 *
 * @param  string $numero  número no padrão DDD do país + DDD região + número
 * @param  string $titulo  título
 * @param  array $texto  array para montar a mensagem 
 * @return bool|string O link com a mensagem formatada, false se houver erro
 */
function Whatsapp(string $numero = '', string $titulo = '', array $texto = []): bool|string
{

  if(empty($numero) || empty($titulo) || empty($texto)){
    return false;
  }

  $nl = "%0A"; //newline

  $text = "-- *$titulo* -- $nl $nl";
  
  foreach($texto as $key => $value){
    $text .= "*$key :* $value $nl";
  }

  return "https://wa.me/$numero?text=$text";
}


$titulo = "Cardápio Lanchonete Legal";

$arr = array(
  "X-Tudo" => "R$ 19,00",
  "X-Queijo" => "R$ 12,00",
  "X-Batata" => "R$ 16,00",
  "X-Ratão" => "R$ 12,00",
  "Batata frita 500g" => "R$ 30,00"
);

$numero = "5511934345722"; // número de exemplo - bot do Ifood

echo Whatsapp($numero, $titulo, $arr);



