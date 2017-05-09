<?php
$asunto= $_GET['asunto'];
$mensaje= $_GET['mensaje'];
$destinatario= $_GET['correo'];
$edad= $_GET['edad'];

$html="";
$html.="<body>";
$html.="$mensaje";
$html.="<img src='https://zexarhost.000webhostapp.com/correos/img/anime.png'>";

$html.="</body>";
$html.="<a href= 'https://zexarhost.000webhostapp.com/correos/recepcion.php?correo=$destinatario&edad=$edad'> Click </a>";




$headers= "MIME-Version: 1.0\r\n";
$headers.= "content-type: text/html; charset=iso-8859-1\r\n";
$headers.= "from: ADSI <zexar88@gmail.com>  " . "\r\n";

 echo 'Enviando correo a '.$destinatario;
 echo $html;
 mail($destinatario, $asunto , $html , $headers);
