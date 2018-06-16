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
 *   Incluir funções especificas de cada página
 * 
 * @param string $pageName o nome do arquivo/pagina a ser configurado
 * 
 * @return void 
 */
function setConfigPage($pageName) {
    setInfoGrupo();    
    $infoGrupo = getInfoGrupo();
    $id = $_GET["id"] ?? 0;

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
            include './functions/danca.php';
            break;
        case "dancatopico":
            setTitleHead($infoGrupo["nome_grupo"]." - Dança topico");
            include './functions/danca.php';
            break;
        case "teatro":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Teatro Clássico");
            break;
        case "teatro_internas":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Teatro Interna");
            break;
        case "atores":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Biografias");
            break;
        case "classicos":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Clássicos do Teatro e Mais");
            break;
        case "mangas":
            include './functions/manga.php';
            setDadosMangas();
            setTitleHead($infoGrupo["nome_grupo"]." - Artes Cências");
            break;
        case "manga":
            include './functions/manga.php';
            setDadosMangas();
            setDadosManga($id);
            $manga = getDadosManga();
            $img = $manga["imagem"];
            $pathImg = "midia/manga/".$img["nome"]."_220".$img["ext"];
            setMetaShared($manga, $pathImg);
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
 * @return string[] com todos os links do menu
 */
function getValuesMenu() : array {
    $itensMenus = [
        [
            "nome" => "Quem Somos",
            "link" => "quem_somos"
        ],
        [
            "nome" => "Teatro",
            "link" => "teatro",
            "subMenu" => [
			    [
                    "nome" => "Teatro",
                    "link" => "teatro"
                ],
			    [
                    "nome" => "Atores",
                    "link" => "atores"
                ],
                [
                    "nome" => "Bunraku",
                    "link" => "teatro_internas",
                    "id" => "2"
                ],
                [
                    "nome" => "Kabuki",
                    "link" => "teatro_internas",
                    "id" => "3"
                ],
                [
                    "nome" => "Kyogen",
                    "link" => "teatro_internas",
                    "id" => "4"
                ],
                [
                    "nome" => "Noh",
                    "link" => "teatro_internas",
                    "id" => "5"
                ],
                [
                    "nome" => "Clássicos",
                    "link" => "obras"
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
            "link" => "index_mangas",
            "subMenu" => [
                [
                    "nome" => "O mangá",
                    "link" => "mangas",
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
            "link" => "dancas",
            "subMenu" => [
                [
                    "nome" => "Danças",
                    "link" => "dancas"
                ],
                [
                    "nome" => "Roupas",
                    "link" => "dancatopico",
                    "id" => "1"
                ],
                [
                    "nome" => "Bon Odori",
                    "link" => "dancatopico",
                    "id" => "2"
                ],
                [
                    "nome" => "Lenda dança",
                    "link" => "dancatopico",
                    "id" => "3"
                ],
                [
                    "nome" => "O livro Kojiki",
                    "link" => "dancatopico",
                    "id" => "4"
                ],
                
            ]
        ],
        [
            "nome" => "Termos",
            "link" => ""
        ],
        [
            "nome" => "O japão",
            "link" => ""
        ],
        [
            "nome" => "A historia",
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
 * @param string  $fileJsonName é o caminho e o nome do arquivo json
 * @param string $formatArray O formato de retorno dos dados se for true retorna 
 *                            em um array, caso seja false retorna um objeto, 
 *                            o valor padrão é true um array
 * 
 * @return array os dados de um arquivo json
 */
function getDadosJson($fileJsonName, $formatArray = true) {
    $json = file_get_contents($fileJsonName);
    return json_decode($json, $formatArray);
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

/**
 * Formata o array da imagem e retorna a tag img
 * 
 * @param string $path O nome da pasta em midia
 * @param array $img O array da imagem com os indices
 *                  + nome
 *                  + ext
 *                  + alt
 *                  + title
 *                  + credito
 * @param string $tamanho O tamanho da imagem com underline no começo
 * @return string A tag img formatada e se o credito foi definido retorna com um link para os creditos
 */
function returnHtmlImg(string $path, array $img, string $tamanho = null): string {
    $imagem = $img["nome"].$tamanho.$img["ext"];
    $alt = $img["alt"];
    $title = $img["title"] ?? "";
    $tag = "<img src='midia/$path/$imagem' class='rounded-circle' alt='$alt' title='$title' />";
    if (isset($img["credito"]) && !empty($img["credito"])) {
        $credito = $img["credito"];
        $tag = "<a href='$credito' title='$title'>$tag</a>";
    }
    return $tag;
}

/**
 * Pega uma matriz e retorna o array correspondente da chave e o valor procurado
 * 
 * @param string $needle O valor a ser procurado
 * @param string $key A chave do array da matriz a ser comparada
 * @param array $fetch_haystack A matriz a ser comparada
 * @return array | bool Retorna a matriz correspondente a pesquisa, caso não 
 *                      encontrado ou a chave de pesquisa não existir retorna false
 */
function getSearchArray(string $needle, string $key, array $fetch_haystack) {
    foreach ($fetch_haystack as $indice => $item) {
        if (isset($item[$key]) && $item[$key] == $needle) {
            return $fetch_haystack[$indice];
        }
    }
    return false;
}

/**
 * Procura por um id em uma matriz e retorna o array correspondente
 * 
 * @param int $id O id a ser procurado
 * @param array $fetch_haystack A matriz a ser comparada
 * @return array | bool Retorna a matriz correspondente a pesquisa, caso não 
 *                      encontrado ou a chave de pesquisa não existir retorna false
 */
function getIdArray(int $id, array $fetch_haystack) {
    return getSearchArray($id, "id", $fetch_haystack);
}

/**
 * Retorna os meta dados para o compartilhamento
 * 
 * @param array $dados Os dados a serem setados
 * @param string $pathImagem O caminho da imagem
 */
function setMetaShared(array $dados, string $pathImagem) {
    $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $infoGrupo = getInfoGrupo();
    $nome_grupo = $infoGrupo["nome_grupo"];
    $pathUrlImg = $pathImagem;
    
    $GLOBALS["metaShare"] = '<meta property="og:url" content="'.$url.' />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="'.$dados["titulo"].'" />
        <meta property="og:description" content="'.$dados["texto"].'" />
        <meta property="og:image" content="'.$pathUrlImg.'" />
        
        <!--whatsapp-->
        <meta property="og:site_name" content="'.$nome_grupo.'">
        <meta property="og:title" content="'.$dados["titulo"].'" />
        <meta property="og:description" content="'.$dados["texto"].'" />
        <meta property="og:image" itemprop="image" content="'.$pathUrlImg.'">
        <meta property="og:type" content="website" />
        <meta property="og:updated_time" content="'.strtotime("now").'" />';
}

/**
 * Retorna os metadados setados pela função setMetaShared()
 * 
 * @return string As tags <meta>
 */
function getMetaShared(): string {
    return $GLOBALS["metaShare"] ?? "";
}
