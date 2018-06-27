<?php
/**
 * <p>
 * Todas as pÃ¡ginas deveram ser acessadas pela index.php por meio de requisiÃ§Ãµes GET.
 * Para requisitar uma pagina, faÃ§a uma requisiÃ§Ã£o com o metodo get com o nome pagina, 
 * nome da pagina deve ser o mesmo que o nome do arquivo.
 * </p>
 * <p>
 * Para incluir a pÃ¡gina Ã© chamado a funÃ§Ã£o @see includePage, que jÃ¡ inclui a 
 * pÃ¡gina com o header e o footer, estÃ¡ mesma funÃ§Ã£o chama @see setConfigPage()
 * para configurar a pÃ¡gina como o title, o botÃ£o ativo, meta tags e inclui 
 * funÃ§oes especificas de cada pÃ¡gina.
 * </p>
 */

include_once './functions/geral.php';

$page = $_GET["pagina"] ?? "home";

$namePage = formatName($page);
if(!empty($namePage) && file_exists($namePage.".php")) {
    includePage($namePage);
} else {
    includePage("arquivo_404");
}
