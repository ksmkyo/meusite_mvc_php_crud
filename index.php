<?php 

require_once('Core/core.php');
require_once('Controller/HomeController.php');
require_once('Controller/ErroController.php');


$template = file_get_contents('./Template/estrutura.html'); //vamos carregar a estrutura html aqui

ob_start();
    $core = new Core; /* core vai fazer a leitura doq o usuario ta acessando e vai carregar
    o controller que vai exibir a pagina */
    $core -> start($_GET);
    $saida = ob_get_contents();
ob_end_clean();
$tplPronto = str_replace('{{Area_dinamica}}', $saida, $template);
echo $tplPronto;

?>  