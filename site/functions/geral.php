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
    switch ($pageName) {
        case "contato":
            setTitleHead("Contato");
            setActivBtnMenu("contato");
            break;
        case "quem_somos":
            setTitleHead("Quem Somos");
            setActivBtnMenu("quem_somos");
            break;
        case "dancas":
            setTitleHead("Dança");
            setActivBtnMenu("dancas");
            break;
        default:
            setTitleHead("Pagina 404");
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
 * @return void
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
