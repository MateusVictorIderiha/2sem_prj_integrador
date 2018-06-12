<?php
/** 
 * Retorna um arrai com todos os itens do menu
 * 
 * @return string[] com todos os links do menu
 */
function getJsonMangas(): array {
    $mangas = getDadosJson("dados/mangas.json");
    return $mangas;
}

/**
 * Seta os dados de todos os mangas na variavel
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
 * Retorna os dados de todos os mangas da variavel global mangas que foi setada pela função setDadosMangas()
 * 
 * @return array[] Todos os mangas
 */
function getDadosMangas(): array {
    return $GLOBALS["mangas"] ?? [];
}

/**
 * Seta os dados de um manga
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
 * Retorna os dados do manga da variavel global manga que foi setada pela função setDadosManga()
 * 
 * @return array[] Todos os mangas
 */
function getDadosManga(): array {
    return $GLOBALS["manga"] ?? [];
}

