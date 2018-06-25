<?php
/** 
 * Formata a string para permitir apenas letras no nome do arquivo e removendo 
 * possiveis formas de trocar o caminho de origem como um "../" para sair da pasta site
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
    setActivBtnSubMenu($pageName);
    switch ($pageName) {
        case "home":
            setTitleHead($infoGrupo["nome_grupo"]." - Home");
            include './functions/danca.php';            
            include './functions/manga.php';            
            include './functions/teatroJapones.php';    
            include './functions/musica.php';    
            setDadosMangas();
            break;
        case "contato":
            setActivBtnMenu("home");
            setTitleHead($infoGrupo["nome_grupo"]." - Contato");
            break;
        case "quem_somos":
            setActivBtnMenu("home");
            setTitleHead($infoGrupo["nome_grupo"]." - Quem Somos");
            break;
        case "dancas":
            setTitleHead($infoGrupo["nome_grupo"]." - Dança");
            include './functions/danca.php';
            break;
        case "dancatopico":
            include './functions/danca.php';
            $dancas = dancatopicos();
            $danca = getIdArray($_GET["id"], $dancas);
            $img = $danca["imagem"];
            $pathImg = "midia/danca/".$img["nome"]."_100".$img["ext"];
            setMetaShared($danca, $pathImg);
            setTitleHead($infoGrupo["nome_grupo"]." - ".$danca['titulo']);
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
	case "atores_internas":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Biografia");
            break;
        case "classicos":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Clássicos do Teatro e Mais");
            break;
	case "classicos_internas":
            include './functions/teatroJapones.php';
            setTitleHead($infoGrupo["nome_grupo"]." - Clássicos do Teatro e Mais");
            break;
        case "japao":
            setTitleHead($infoGrupo["nome_grupo"]." - Japão");
            break;
        case "termo_uso":
            setTitleHead($infoGrupo["nome_grupo"]." - Termos de uso");
            break;
        case "historia":
            setTitleHead($infoGrupo["nome_grupo"]." - História da arte no japão");
            break;
        case "historia_origame":
            setTitleHead($infoGrupo["nome_grupo"]." - História do Origami");
            break;
        case "aprenda_a_fazer":
        case "aprenda_a_fazer2":
            setTitleHead($infoGrupo["nome_grupo"]." - Aprenda a fazer Origami");
            break;
        case "origami":
        case "origami2":
            setTitleHead($infoGrupo["nome_grupo"]." - Origami");
            break;
        case "curiosidades_origami":
            setTitleHead($infoGrupo["nome_grupo"]." - Curiosidades do Origami");
            break;
        case "musicas":
            setTitleHead($infoGrupo["nome_grupo"]." - Músicas");
            include './functions/musica.php';
            break;
        case "musica":
            setTitleHead($infoGrupo["nome_grupo"]." - Música");
            include './functions/musica.php';
            break;
        case "mangas":
            include './functions/manga.php';
            setDadosMangas();
            setMangasCategoria($id);
            setDadosCategoria($id);
            $cat = getDadosCategoria();
            setTitleHead($infoGrupo["nome_grupo"]." - Mangas - ".$cat["nome"]);
            break;
        case "manga":
            include './functions/manga.php';
            setActivBtnMenu("mangas");
            setDadosMangas();
            setDadosManga($id);
            $manga = getDadosManga();
            $img = $manga["imagem"];
            $pathImg = "midia/manga/".$img["nome"]."_220".$img["ext"];
            setMetaShared($manga, $pathImg);
            setTitleHead($infoGrupo["nome_grupo"]." - Manga - ".$manga["titulo"]);
            break;
        case "busca":
            include './functions/manga.php';
            include './functions/musica.php';
            include './functions/danca.php';
            include './functions/teatroJapones.php';
            setDadosMangas();
            $busca = $_GET["busca"] ?? "";
            setTitleHead($infoGrupo["nome_grupo"]." - Busca: $busca");
            break;
        default:
            setTitleHead($infoGrupo["nome_grupo"]." - Pagina 404");
            break;
    }
}

/** 
 * Inclui a pagina, e configura a página usando @see setConfigPage()
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 *  
 * @return string O valor da variavel global titleHead
 */
function getTitleHead(): string {
    return $GLOBALS["titleHead"];
}

/** 
 * escreve o valor do botão ativado no menu
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @return retorna o valor na variavel global activeBtnMenu que foi setada pela função setActivBtnMenu()
 */
function getActivBtnMenu(): string {
    return $GLOBALS["activeBtnMenu"] ?? false;
}

/** 
 * escreve o valor do botão ativado no submenu
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param string $btn o nome do link do botão do submenu para ser ativado
 * 
 * @return void
 */
function setActivBtnSubMenu(string $btn) {
    $GLOBALS["activeBtnSubMenu"] = $btn;
}

/** 
 * retorna o valor do submenu botão ativo
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @return retorna o valor na variavel global activeBtnSubMenu que foi setada pela função setActivBtnSubMenu()
 */
function getActivBtnSubMenu(): string {
    return $GLOBALS["activeBtnSubMenu"] ?? false;
}

/** 
 * Retorna um arrai com todos os itens do menu
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @return string[] com todos os links do menu
 */
function getValuesMenu() : array {
    $itensMenus = [
        [
            "nome" => "Ori Art",
            "link" => "home",
            "subMenu" => [
                [
                    "nome" => "Termos",
                    "link" => "termo_uso"
                ],
                [
                    "nome" => "Quem Somos",
                    "link" => "quem_somos"
                ],
                [
                    "nome" => "Contato",
                    "link" => "contato"
                ]
            ]
        ],
        [
            "nome" => "Teatro",
            "link" => "teatro",
            "subMenu" => [
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
                    "link" => "classicos",
                ]
            ],
        ],
        [
            "nome" => "Música",
            "link" => "musicas",
            "subMenu" => [
                [
                    "nome" => "J-POP",
                    "id" => "1",
                    "link" => "musica"
                ],
                                [
                    "nome" => "J-ROCK",
                    "id" => "2",
                    "link" => "musica"
                ],
                                [
                    "nome" => "Instrumentos Musicais",
                    "id" => "3",
                    "link" => "musica"
                ],
                                [
                    "nome" => "Música Tradicional",
                    "id" => "4",
                    "link" => "musica"
                ]
            ]
        ],
        [
            "nome" => "Mangá",
            "link" => "mangas",
            "id" => "1",
            "subMenu" => [
                [
                    "nome" => "O mangá",
                    "link" => "mangas",
                    "id" => "1"
                ],
                [
                    "nome" => "Novidades",
                    "link" => "mangas",
                    "id" => "2"
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
            "nome" => "Origami",
            "link" => "historia_origami",
            "subMenu" => [
                [
                    "nome" => "Curiosidades",
                    "link" => "curiosidades_origami",
                ],
                [
                    "nome" => "Origami",
                    "link" => "origami",
                ],
                [
                    "nome" => "Aprenda a fazer",
                    "link" => "aprenda_a_fazer",
                ]
            ]
        ],
        [
            "nome" => "O japão",
            "link" => "japao"
        ],
        [
            "nome" => "A historia",
            "link" => "historia"
        ]
    ];
    
    return $itensMenus;
}

/** 
 * Usado para retornar os dados de consultas aos arquivos json
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @return array das informações do grupo como nome do grupo, e informações dos integrantes
 */
function getInfoGrupo() {
    return $GLOBALS["infoGrupo"];
}

/**
 * Formata o array da imagem e retorna a tag img
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param string $path O nome da pasta em midia
 * @param array $img O array da imagem com os indices
 *                  + nome
 *                  + ext
 *                  + alt
 *                  + title
 *                  + credito
 * @param string $tamanho O tamanho da imagem com underline no começo
 * @param string $class A classe 
 * 
 * @return string A tag img formatada e se o credito foi definido retorna com um link para os creditos
 */
function returnHtmlImg(string $path, array $img, string $tamanho = null, string $class = 'rounded-circle'): string {
    $imagem = $img["nome"].$tamanho.$img["ext"];
    $alt = $img["alt"];
    $title = $img["title"] ?? "";
    $tag = "<img src='midia/$path/$imagem' class='$class' alt='$alt' title='$title' />";
    if (isset($img["credito"]) && !empty($img["credito"])) {
        $credito = $img["credito"];
        $tag = "<a href='$credito' title='$title'>$tag</a>";
    }
    return $tag;
}

/**
 * Pega uma matriz e retorna o array correspondente da chave e o valor procurado
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param string $needle O valor a ser procurado
 * @param string $key A chave do array da matriz a ser comparada
 * @param array $fetch_haystack A matriz a ser comparada
 * @return array|bool Retorna a matriz correspondente a pesquisa, caso não 
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
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param int $id O id a ser procurado
 * @param array $fetch_haystack A matriz a ser comparada
 * @return array|bool Retorna a matriz correspondente a pesquisa, caso não 
 *                      encontrado ou a chave de pesquisa não existir retorna false
 */
function getIdArray(int $id, array $fetch_haystack) {
    return getSearchArray($id, "id", $fetch_haystack);
}

/**
 * Retorna os meta dados para o compartilhamento
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param array $dados Os dados a serem setados
 * @param string $pathImagem O caminho da imagem
 */
function setMetaShared(array $dados, string $pathImagem) {
    $url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $infoGrupo = getInfoGrupo();
    $nome_grupo = $infoGrupo["nome_grupo"];
    $pathUrlImg = $pathImagem;
    
    $GLOBALS["metaShare"] = '<meta property="og:url" content="'.$url.'" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="'.$dados["titulo"].'" />
        <meta property="og:description" content="'.$dados["texto"].'" />
        <meta property="og:image" content="'.$pathUrlImg.'" />
        
        <!--whatsapp-->
        <meta property="og:site_name" content="'.$nome_grupo.'">
        <meta property="og:title" content="'.$dados["titulo"].'" />
        <meta property="og:description" content="'.$dados["texto"].'" />
        <meta property="og:image" itemprop="image" content="'.$pathUrlImg.'">
        <meta property="og:updated_time" content="'.strtotime("now").'" />';
}

/**
 * Retorna os metadados setados pela função setMetaShared()
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @return string As tags <meta>
 */
function getMetaShared(): string {
    return $GLOBALS["metaShare"] ?? "";
}

/**
 * Marca um texto que é procurado e corta a string texto se for maior que 160 caracteres
 * 
 * @author Mateus Victor <mateus.rego@fatec.sp.gov.br>
 * 
 * @param string $needle
 * @param string $haystack
 * @param int $posicao
 * @return string
 */
function markText(string $needle, string $haystack, int $posicao): string {
    if (strlen($haystack) > 160) {
        if ($posicao < 160) {
            $haystack = substr($haystack, 0, 160)."...";
        } elseif ($posicao > 160) {
            $posInicial = $posicao - 80;
            $posFinal = $posicao + 80;
            $haystack = "...".substr($haystack, $posInicial, $posFinal)."...";
        }
    }
    return str_replace($needle, "<mark>".$needle."</mark>", $haystack);
}

function searchBuscaDados(array $contents, $search) {
    foreach ($contents as $content) {
        if (isset($content["titulo"]) && strpos($content["titulo"], $search) !== false) {
            $posicao = strpos($content["titulo"], $search);
            $content["titulo"] = markText($search, $content["titulo"], $posicao);
        } 
        if (isset($content["texto"]) && strpos($content["texto"], $search) !== false) {
            $posicao = strpos($content["texto"], $search);
            $content["texto"] = markText($search, $content["texto"], $posicao);
        } 
        if (isset($content["subtitulo"]) && strpos($content["subtitulo"], $search) !== false) {
            $posicao = strpos($content["subtitulo"], $search);
            $content["subtitulo"] = markText($search, $content["subtitulo"], $posicao);
        }

        if (isset($posicao)) {
            yield $content;
            unset($posicao);
        }
    }
}

function getDadosBusca(string $search): Iterator {
    $dadosHaystack = [];
    $dadosHaystack["manga"] = getDadosMangas();
    $dadosHaystack["dancas"] = dancatopicos();
    $dadosHaystack["musica"] = getMusica();
    $dadosHaystack["classicos_internas"] = classicosInterna();

    foreach ($dadosHaystack as $name => $contents) {
        $dadosSearch = searchBuscaDados($contents, $search);
        if ($dadosSearch->valid()) {
            yield $name => $dadosSearch;
        }
    }
}
