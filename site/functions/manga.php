<?php


/** 
 * Retorna um array com todos os itens do menu
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return string[] com todos os links do menu
 */
function getJsonMangas(): array {
    $mangas = getDadosJson("dados/mangas.json");
    return $mangas;
}

/**
 * Seta os dados de todos os mangas na variavel
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 */
function setDadosMangas() {
    if (!isset($GLOBALS["mangas"])) {
        /**
         * @global array $GLOBALS['mangas'] Variavel contendo todos os mangas
         * @name $mangas
         */
        $GLOBALS["mangas"] = getJsonMangas();
    }
}

/**
 * Retorna os dados de todos os mangas da variavel global mangas que foi setada pela função @see setDadosMangas()
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array[] Todos os mangas
 */
function getDadosMangas(): array {
    return $GLOBALS["mangas"] ?? [];
}

/**
 * Retorna um array contendo todas os mangas com uma categoria em especifico
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @param array $mangas Os mangas
 * @param int $categoria O id do manga
 * @return array Os com mangas com o id
 */
function getMangasCat(array $mangas, int $categoria): array {
    $mangasCat = [];
    foreach ($mangas as $indice => $manga) {
        if ($manga["categoria"] == $categoria) {
            $mangasCat[] = $manga;
        }
    }
    return $mangasCat;
}

/**
 * Os dados de todos os mangas de uma categoria da variavel global 
 * mangasCategoria que foi setada pela função @see setDadosMangas()
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array[] Todos os mangas
 */
function setMangasCategoria(int $idCategoria = null) {
    $dadosMangas = getDadosMangas();
    $categoriaMangas = getMangasCat($dadosMangas, $idCategoria);
    $GLOBALS["mangasCategoria"] = $categoriaMangas;
}

/**
 * Retorna os dados de todos os mangas de uma categoria da variavel global 
 * mangasCategoria que foi setada pela função @see setDadosMangas()
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array[] Todos os mangas
 */
function getMangasCategoria(): array {
    return $GLOBALS["mangasCategoria"] ?? [];
}

/**
 * Seta os dados de um manga
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @param int $idManga O id do manga
 * 
 * @return array O mangá correspondente ao id
 */
function setDadosManga(int $idManga) {
    if (!isset($GLOBALS["manga"])) {
        $dadosMangas = getDadosMangas();
        /**
         * @global array $GLOBALS['manga'] Variavel contendo o manga
         * @name $manga
         */
        $GLOBALS["manga"] = getIdArray($idManga, $dadosMangas);
    }
}

/**
 * Retorna os dados do manga da variavel global manga que foi setada pela função @see setDadosManga()
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array[] Todos os mangas
 */
function getDadosManga(): array {
    return $GLOBALS["manga"] ?? [];
}

/**
 * Seta os dados da categoria
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @param int|null $idCat ID da categoria
 */
function setDadosCategoria(int $idCat = null) {
    $categorias = getDadosJson("dados/categoria.json");
    $GLOBALS["categoriasDados"] =  $categorias;
    if (!is_null($idCat)) {
        $GLOBALS["categoriaDados"] = getIdArray($idCat, $categorias);
    }
}

/**
 * Retorna os dados das categorias
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array[] As categorias
 */
function getDadosCategorias() {
    return $GLOBALS["categoriaDados"] ?? $GLOBALS["categoriasDados"] ?? "";
}

/**
 * Retorna da categoria que foi setado por @see setDadosCategoria($id);
 * 
 * @author Mateus Victor <mateus.rego@etec.sp.gov.br>
 * 
 * @return array A categoria com o id
 */
function getDadosCategoria() {
    return $GLOBALS["categoriaDados"] ?? $GLOBALS["categoriasDados"] ?? "";
}
