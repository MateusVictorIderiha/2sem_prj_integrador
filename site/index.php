<?php
include_once './functions/geral.php';

$page = $_GET["pagina"] ?? "home";

$namePage = formatPrefix($page);
if(!empty($namePage) && file_exists($namePage.".php")) {
    includePage($namePage);
} else {
    includePage("arquivo_404");
}