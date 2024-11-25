<?php
//include carga el recurso y si hay fallas no dice nada
//require carga el recursopero si hay fallas emite mensajes


//include_once carga solo una vez
//require_once

//http//sistema.test/test/testConfig.php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';

echo $_urlBase;

//echo get_UrlBase;

echo get_UrlBase('pagina.php');


?>