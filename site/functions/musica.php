<?php

/**
 * pega os dados da musicas
 * @return array retorna uma lista contendo todas os conteúdos das paginas
 */
function getMusica(): array {
    $musicas = [
        [
            // PARTE PRINCIPAL. PODE APAGAR ESSE COMENTARIO DEPOIS, FOI MARCADA NO HTML CADA PARTE
            // PASSOS -> FAZER TERMINAR DE COMPLETAR OS DADOS APENAS DO PRIMEIRO
            // -> PREENCHER DADOS USANDO PHP, APAGAR O ORIGINAL E COLOCAR O NOVO
            // -> FAZER PARA AS DEMAIS PAGINA, COLOCAR OS MESMOS DADOS DA PRIMEIRA NOS OUTROS ARRAYS
            "titulo" => "J-POP",
            "id" => "1",
            "imagem" => "logo_j.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            
//            PARTE EXTRA
            "extra" => [
                "tituloExtra" => "Principais Artistas",
                // SECTION EXTRA
                "sectionExtra" => [
                    [
                        "titulo" => "Perfume",
                        "imagem" => "",
                        // pode colocar paragrafo no texto mesmo cuidado com as aspas
                        "texto" => ''
                    ],
                    [
                        "titulo" => "Arashi",
                        "imagem" => "",
                        "texto" => ''
                    ],
                    [
                        "titulo" => "Perfume",
                        "imagem" => "",
                        "texto" => ''
                    ],
                    [
                        "titulo" => "Perfume",
                        "imagem" => "",
                        "texto" => ''
                    ],
                ]
            ]
        ],
        [
            "titulo" => "J-ROCK",
            "id" => "2",
            "imagem" => "logo_r.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
        ],
        [
            "titulo" => "Instrumentos Musicais",
            "id" => "3",
            "imagem" => "logo_ij.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
        ],
        [
            "titulo" => "Música Tradicional",
            "id" => "4",
            "imagem" => "logo_mt.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
        ]
    ];
    return $musicas;
}
