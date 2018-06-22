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
            // -> SE CONSEGUIR TERMINAR TUDO, JOGAR SEU FOREACH DE MUSICAS NA HOME.PHP, VAI DAR ERRO POR CAUSA DO SET_CONFIG AI VC TEM QUE ADD O INCLUDE
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
                        "imagem" => "perfume.jpg",
                        // pode colocar paragrafo no texto mesmo cuidado com as aspas
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Arashi",
                        "imagem" => "arashi_2.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Ikimono Gakari",
                        "imagem" => "iki_gakari.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "BabyMetal",
                        "imagem" => "bmtal.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
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
