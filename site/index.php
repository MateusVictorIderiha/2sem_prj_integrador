    <?php
/**
 * <p>
 * Todas as páginas deveram ser acessadas pela index.php por meio de requisições GET.
 * Para requisitar uma pagina, faça uma requisição com o metodo get com o nome pagina, 
 * nome da pagina deve ser o mesmo que o nome do arquivo.
 * </p>
 * <p>
 * Para incluir a página é chamada a função @see includePage, que já inclui a 
 * página com o header e o footer, está mesma função chama @see setConfigPage()
 * para configurar a página como o title, o botão ativo, meta tags e inclui 
 * função especificas de cada página.
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
