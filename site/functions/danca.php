<?php

/**
 * retorna o array com os valores do danca topico
 * 
 * @return array
 */
function dancatopicos(): array {
    $dancas = getDadosJson("dados/dancas.json");
    return $dancas;
}

/**
 * retorna o array com os valores do viste outros
 * 
 * @return array
 */
function visiteoutros() {
        $visites = [
            [
                "ref" => "index.php?pagina=mangas&id=1",
                "nome" => "akihabara_170", 
                "ext" => ".jpg",
                "alt" => "area do japao de akihabara muito popular de cultura de animes jogos etc"
            ],
            [
                "ref" => "index.php?pagina=teatro",
                "nome" => "teatro_170", 
                "ext" => ".jpg",
                "alt" => "peça de teatro tipica do japão"
            ],
            [
                "ref" => "index.php?pagina=musicas",
                "nome" => "perfume_170", 
                "ext" => ".jpg",
                "alt" => "Banda japonesa composta apenas de mulheres"
            ],
            [
                "ref" => "index.php?pagina=historia_origame",
                "nome" => "origami_170", 
                "ext" => ".jpg",
                "alt" => "origami de um dragão feito com uma folha branca"
            ]
        ];
        
        return $visites;
    }
