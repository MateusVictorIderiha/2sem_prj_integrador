<?php
/** 
 * Um resumo informando ao usuário o que o elemento associado faz. 
 * 
 * @param string $prefix para ser formatado com apenas letras
 * 
 * @return void 
 */
function formatPrefix($prefix) {
    $formatEspecial = preg_replace("[^a-Z]", "", $prefix);
    return strtolower($formatEspecial);
}

/** 
 * Cria as configurações da pagina como:
 *   Title no Head
 *   Botão ativado no menu
 * 
 * @param string $pageName o nome do arquivo/pagina a ser configurado
 * 
 * @return void 
 */
function setConfigPage($pageName) {
    setInfoGrupo();    
    $infoGrupo = getInfoGrupo();

    switch ($pageName) {
        case "contato":
            setTitleHead($infoGrupo["nome_grupo"]." - Contato");
            setActivBtnMenu("contato");
            break;
        case "quem_somos":
            setTitleHead($infoGrupo["nome_grupo"]." - Quem Somos");
            setActivBtnMenu("quem_somos");
            break;
        case "dancas":
            setTitleHead($infoGrupo["nome_grupo"]." - Dança");
            setActivBtnMenu("dancas");
            break;
        case "cenicas":
            setTitleHead($infoGrupo["nome_grupo"]." - Artes Cências");
            setActivBtnMenu("cenicas");
            break;
        default:
            setTitleHead($infoGrupo["nome_grupo"]." - Pagina 404");
            setActivBtnMenu("arquivo_404");
            break;
    }
}

/** 
 * Inclui a pagina
 * 
 * @param string $fileName o nome do arquivo sem o .php
 * 
 * @return void 
 */
function includePage($fileName) {
    setConfigPage($fileName);

    include_once "./header.php";
    include_once $fileName.".php";
    include_once "./footer.php";
}

/** 
 * escreve o valor do title para head e deixa ela global
 * 
 * @param string $title Com uma * descrição * deste argumento, estes também podem 
 * abranger múltiplas linhas. 
 * 
 * @return void
 */
function setTitleHead(string $title) {
    $GLOBALS["titleHead"] = $title;
}

/** 
 * retorna o valor do title para o head
 * 
 * @param string $title Com uma * descrição * deste argumento, estes também podem 
 * abranger múltiplas linhas. 
 * 
 * @return string O valor da variavel global titleHead
 */
function getTitleHead(): string {
    return $GLOBALS["titleHead"];
}

/** 
 * escreve o valor do botão ativado no menu
 * 
 * @param string $btn Com uma * descrição * deste argumento, estes também podem 
 * abranger múltiplas linhas. 
 * 
 * @return void
 */
function setActivBtnMenu(string $btn) {
    $GLOBALS["activeBtnMenu"] = $btn;
}

/** 
 * retorna o valor do title para o head
 * 
 * @param string $title Com uma * descrição * deste argumento, estes também podem 
 * abranger múltiplas linhas. 
 * 
 * @return void
 */
function getActivBtnMenu(): string {
    return $GLOBALS["activeBtnMenu"];
}

/** 
 * Retorna um arrai com todos os itens do menu
 * 
 * @return matriz com todos os links do menu
 */
function getValuesMenu() {
    $itensMenus = [
        [
            "nome" => "Músicas",
            "subMenu" => [
                [
                    "nome" => "Noticias",
                    "link" => ""
                ],
                [
                    "nome" => "Bunraku",
                    "link" => ""
                ],
                [
                    "nome" => "Kabuki",
                    "link" => ""
                ],
                [
                    "nome" => "Recomendações",
                    "link" => ""
                ]
            ],
            "link" => "musica"
        ],
        [
            "nome" => "Contato",
            "link" => "contato"
        ],
        [
            "nome" => "Dança",
            "link" => "dancas"
        ],
        [
            "nome" => "Quem Somos",
            "link" => "quem_somos"
        ]
    ];
    
    return $itensMenus;
}

/** 
 * Usado para retornar os dados de consultas aos arquivos json
 * 
 * @param $fileJsonName é o caminho e o nome do arquivo json
 * 
 * @return array os dados de um arquivo json em forma de array
 */
function getDadosJson($fileJsonName) {
    $json = file_get_contents($fileJsonName);
    return json_decode($json, true);
}

/** 
 * Seta um array com as informções do grupo e dos integrantes em um array global $GLOBALS["infoGrupo"]
 * 
 * @return void
 */
function setInfoGrupo() {
    $GLOBALS["infoGrupo"] = getDadosJson("dados/grupo.json");
}

/** 
 * Retorna o valor setado pela função setInfoGrupo() de $GLOBALS["infoGrupo"]
 * 
 * @return array das informações do grupo como nome do grupo, e informações dos integrantes
 */
function getInfoGrupo() {
    return $GLOBALS["infoGrupo"];
}

