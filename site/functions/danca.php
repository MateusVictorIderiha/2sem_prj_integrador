<?php

/**
 * 
 * 
 * @return array
 */
function dancatopicos(): array {
    $dancas = getDadosJson("dados/dancas.json");
    return $dancas;
}

function visiteoutros() {
        $visites = [
            [
                "ref" => "index.php?pagina=index_mangas",
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
                "ref" => "index.php?pagina=index_mangas",
                "nome" => "akihabara_170", 
                "ext" => ".jpg",
                "alt" => "area do japao de akihabara muito popular de cultura de animes jogos etc"
            ]
        ];
        
        return $visites;
    }