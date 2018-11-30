
<?php

//$urI = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
//die($urI);

header("Content-Type: text/html;charset=utf-8");
require_once '../vendor/autoload.php';
require_once '../config/config.php';

//echo CAMINHO_PAGE.'</BR>';
//echo CAMINHO_IMG.'</BR>';
//echo DIR_ROOT.'</BR>';

//use App\teste;
//$teste = new teste();

?>
<img src="<?php echo CAMINHO_IMG.'modelo6.png'; ?>">