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
            "alt" =>"Imagem de uma bandeira do japão escrito jpop.",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Artistas",
                "sectionExtra" => [
                    [
                        "titulo" => "Perfume",
                        "imagem" => "perfume.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jpop denominada Perfume composta por 4 membros, sendos todas meninas.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Arashi",
                        "imagem" => "arashi_2.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jpop denominada Arashi composta por 4 membros, sendo tres homens e uma mulher.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Ikimono Gakari",
                        "imagem" => "iki_gakari.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jpop denominada Ikimono Kagari composta por 4 membros, sendo tres homens e uma mulher.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "BabyMetal",
                        "imagem" => "bmtal.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jpop-rock denominada BabyMetal composta por 5 membros, sendo todas mulheres.",
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
            "alt" =>"Imagem da bandeira do japão, ecrito J-rock.",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Artistas",
                "sectionExtra" => [
                    [
                        "titulo" => "Hata Motohiro",
                        "imagem" => "motori.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jrock denominada Hata Motohiro composta por 4 membros, sendo todos homens.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Moshimo",
                        "imagem" => "moshimo.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jrock denominada Moshimo composta por 4 membros, sendo tres homens que ficam nos instrumentos e uma mulher que é a vocalista.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Scandal",
                        "imagem" => "scandal_cover.jpg",
                        "alt" =>"Imagem relacionada à banda de jrock denominada Scandal composta por 5 membros semdo quatro homens que ficam nos instrumentos e uma mulher que é a vocalista.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Ikimono Gakari",
                        "imagem" => "iki_gakari_2.jpg",
                        "alt" =>"Imagem relacionada a uma banda de jrock denominada Ikimono Gakari composta por 4 membros, sendo 3 homens que ficam nos instrumentos e uma mulher que é a vocalista.",
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
            "alt" =>"Imagem relacionada a uma banda de jrock denominada Moshimo composta por 4 membros.",
            "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo..",
            "extra" => [
                "tituloExtra" => "Principais Instrumentos Musicais",
                "sectionExtra" => [
                    [
                        "titulo" => "Biwa",
                        "imagem" => "biwa.jpg",
                        "alt" =>"Imagem relacionada a um instrumento musical japonês denominado Biwa, é um instrumento parecido com o violão, porém tem um formato parecido com um vaso de barro e tem 4 cordas .",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Koto",
                        "imagem" => "koto.jpg",
                        "alt" =>"Imagem relacionada a um instrumento musical japonês denominado Koto, parecido com uma arpa, porém as cordas são colocadas em uma espácie de tábua curva. .",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Shamisen",
                        "imagem" => "shamisen.jpg",
                        "alt" =>"Imagem relacionada a um instrumento musical japonês denominado Shamisen é um instrumento parecido com o cavaquinho, porém tem um formato quadrado, contendo apenas tres cordas.",
                        "texto" => "<p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>
                       <p class='text-justify'>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tempore id quia voluptate laboriosam quibusdam in accusamus animi provident neque harum sed eius, consequatur odit quas sint officiis ducimus dolor?</p>"
                    ],
                    [
                        "titulo" => "Taiko",
                        "imagem" => "taiko.jpg",
                        "alt" =>"Imagem relacionada a um instrumento musical japonês denominado Taiko é um tambor que é tocado por apenas uma pessoa que utiliza dois pedaços pequenos de uma material feito de madeira que se assemelham a baquetas de bateria.",
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
            "alt" =>"Imagem relacionada a uma banda de jrock denominada Moshimo composta por 4 membros.",
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
