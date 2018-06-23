<?php

/**
 * pega os dados da musicas
 * @return array retorna uma lista contendo todas os conteúdos das paginas
 */
function getMusica(): array {
    $musicas = [
        [
            "titulo" => "J-POP",
            "id" => "1",
            "imagem" => "logo_j.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Artistas",
                "sectionExtra" => [
                    [
                        "titulo" => "Perfume",
                        "imagem" => "perfume.jpg",
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
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Artistas",
                "sectionExtra" => [
                    [
                        "titulo" => "Hata Motohiro",
                        "imagem" => "motori.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Moshimo",
                        "imagem" => "moshimo.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Scandal",
                        "imagem" => "scandal_cover.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Ikimono Gakari",
                        "imagem" => "iki_gakari_2.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                ]
            ]
            
            ],
        [
            "titulo" => "Instrumentos musicais",
            "id" => "3",
            "imagem" => "logo_ij.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Instrumentos Musicais",
                "sectionExtra" => [
                    [
                        "titulo" => "Biwa",
                        "imagem" => "biwa.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Koto",
                        "imagem" => "koto.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Shamisen",
                        "imagem" => "shamisen.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Taiko",
                        "imagem" => "taiko.jpg",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                ]
            ]        
            
            ],
        [
            "titulo" => "Música tradicional japonesa",
            "id" => "4",
            "imagem" => "logo_mt.jpg",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "História da música tradicional japonesa",
                "sectionExtra" => [
                    [
                        "titulo" => "Era Nara (710 – 794)",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    
                        ],
                    [
     
                        "titulo" => "Era Kamakura (1192 – 1333)",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                           
                    ],
                    [
                        "titulo" => "Era Heian (794 – 1192)",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Era Edo (1603 – 1867)",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                ]
            ]       
            
            ]
    ];

    return $musicas;
}
