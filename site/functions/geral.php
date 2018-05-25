<?php
/** 
 * Formata a string para permitir apenas letras no nome do arquivo e removendo 
 * possiveis formas de trocar o caminho de origem como um "../" para sair da pasta site
 * 
 * @param string $name a variavel a ser ser formatada com apenas letras
 * 
 * @return string o valor formatado apenas com letras 
 */
function formatName($name) {
    $formatEspecial = preg_replace("[^a-Z]", "", $name);
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

    setActivBtnMenu($pageName);

    switch ($pageName) {
        case "contato":
            setTitleHead($infoGrupo["nome_grupo"]." - Contato");
            break;
        case "quem_somos":
            setTitleHead($infoGrupo["nome_grupo"]." - Quem Somos");
            break;
        case "dancas":
            setTitleHead($infoGrupo["nome_grupo"]." - Dança");
            break;
        case "cenicas":
            setTitleHead($infoGrupo["nome_grupo"]." - Artes Cências");
            break;
        default:
            setTitleHead($infoGrupo["nome_grupo"]." - Pagina 404");
            break;
    }
}

/** 
 * Inclui a pagina
 * 
 * @param string $pageName o nome do arquivo sem o .php
 * 
 * @return void 
 */
function includePage($pageName) {
    setConfigPage($pageName);

    include_once "./header.php";
    include_once $pageName.".php";
    include_once "./footer.php";
}

/** 
 * escreve o valor do title para head e deixa ela global
 * 
 * @param string o valor a ser setado na variavel global titlehead
 * 
 * @return void
 */
function setTitleHead(string $title) {
    $GLOBALS["titleHead"] = $title;
}

/** 
 * retorna o valor do title para o head
 *  
 * @return string O valor da variavel global titleHead
 */
function getTitleHead(): string {
    return $GLOBALS["titleHead"];
}

/** 
 * escreve o valor do botão ativado no menu
 * 
 * @param string $btn o nome do link do botão para ser ativado
 * 
 * @return void
 */
function setActivBtnMenu(string $btn) {
    $GLOBALS["activeBtnMenu"] = $btn;
}

/** 
 * retorna o valor do botão ativo
 * 
 * @return retorna o valor na variavel global activeBtnMenu que foi setada pela função setActivBtnMenu()
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
            "nome" => "Quem Somos",
            "link" => "quem_somos"
        ],
        [
            "nome" => "Teatro",
            "link" => "",
            "subMenu" => [
                [
                    "nome" => "Artes cêncas",
                    "link" => "cenicas"
                ],
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
                    "nome" => "Kyogen",
                    "link" => ""
                ],
                [
                    "nome" => "Noh",
                    "link" => ""
                ],
                [
                    "nome" => "Recomendações",
                    "link" => ""
                ]
            ],
        ],
        [
            "nome" => "Música",
            "link" => "",
            "subMenu" => [
                [
                    "nome" => "Gênero 1",
                    "link" => ""
                ],
                [
                    "nome" => "Gênero 2",
                    "link" => ""
                ],
                [
                    "nome" => "Gênero 3",
                    "link" => ""
                ],
            ]
        ],
        [
            "nome" => "Mangá",
            "link" => "",
            "subMenu" => [
                [
                    "nome" => "O mangá",
                    "link" => "manags",
                    "id" => "1"
                ],
                [
                    "nome" => "Grandes obras",
                    "link" => "mangas",
                    "id" => "2"
                ],
                [
                    "nome" => "Novidades",
                    "link" => "mangas",
                    "id" => "3"                    
                ],
            ]
        ],
        [
            "nome" => "Danças",
            "link" => "",
            "subMenu" => [
                [
                    "nome" => "Danças",
                    "link" => "dancas"
                ],
                [
                    "nome" => "Roupas",
                    "link" => "roupas"
                ],
                [
                    "nome" => "Dança Dois",
                    "link" => ""
                ],
                [
                    "nome" => "Dança Três",
                    "link" => ""
                ]
                
            ]
        ],
        [
            "nome" => "Termos",
            "link" => ""
        ],
        [
            "nome" => "Contato",
            "link" => "contato"
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
    /**
     * contem as informações do grupo
     * @global array $GLOBALS['infoGrupo']
     * @name $infoGrupo 
     */
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
