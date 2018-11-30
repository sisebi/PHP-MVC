<?php

$PastaInterna = "";
#Caminho Absoluto
define('CAMINHO_PAGE', "https://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
#Caminhos especificos
define('CAMINHO_IMG', CAMINHO_PAGE."public_html/img/");
define('CAMINHO_CSS', CAMINHO_PAGE."public_html/css/");
define('CAMINHO_JS', CAMINHO_PAGE."public_html/js/");
#Directore Raiz
//define('DIR_ROOT', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    define('DIR_ROOT', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIR_ROOT', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");    
}

#Acesso Banco de Dados
define('DB_HOST', "localhost");
define('DB_NOME', "sistema");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TIMEZONE', "");

