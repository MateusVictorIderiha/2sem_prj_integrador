<?php
/**
 * pega os dados da musicas
 * @return array retorna uma lista contendo todas os conteúdos das paginas
 */
function getMusica() : array {
    $musicas=[
    [
    "titulo"=>"J-POP",
    "id"=>"1",
    "imagem"=>"logo_j.jpg",
    "texto"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
    ],
    [
    "titulo"=>"J-ROCK",
    "id"=>"2",
    "imagem"=>"logo_r.jpg",
    "texto"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
    ],
    [
    "titulo"=>"Instrumentos Musicais",
    "id"=>"3",
    "imagem"=>"logo_ij.jpg",
    "texto"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
    ],
    [
    "titulo"=>"Música Tradicional",
    "id"=>"4",
    "imagem"=>"logo_mt.jpg",
    "texto"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eius libero accusamus corporis, earum corrupti, quaerat quasi molestiae hic, nobis distinctio dignissimos eos. Aut autem aliquid maxime mollitia, quam illo.."
    ]
    ];
    return $musicas;
}
            