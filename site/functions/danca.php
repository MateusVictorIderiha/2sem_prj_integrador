<?php

/**
 * 
 * 
 * @return array
 */
function dancaTopicos(): array {
    $danca = array(
        array(
            "id" => 1,
            "titulo" => "Roupas",
            "texto" => "Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus veloc.",
            "imagem" => array(
                "nome" => "RoupasDanca",
                "ext" => ".jpg",
                "alt" => "duas moças moças japonesas com roupas tipicas de dança japonesa"
            )
        ),

        array(
            "id" => 2,
            "titulo" => "Bon Odori",
            "texto" => "Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus veloc.",
            "imagem" => array(
                "nome" => "BonodriDanca",
                "ext" => ".jpg",
                "alt" => "Mulher tocando um tambor em um festival de dança japones"
            )
        ),

        array(
            "id" => 3,
            "titulo" => "Lenda dança",
            "texto" => "Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus veloc.",
            "imagem" => array(
                "nome" => "lendaDanca",
                "ext" => ".jpg",
                "alt" => "Quadro da lenda japonesa sobre o nascimento da dança"
            )
        ),

        array(
            "id" => 4,
            "titulo" => "O livro Kojiki",
            "texto" => "Pellentesque molestie diam lacus, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus vel, ut sollicitudin mauris cursus vitae. Sed est orci, facilisis eu metus veloc.",
            "imagem" => array(
                "nome" => "KojikiDanca",
                "ext" => ".jpg",
                "alt" => "Livros velhos"
            )
        )
    );
    
    return $danca;
}

