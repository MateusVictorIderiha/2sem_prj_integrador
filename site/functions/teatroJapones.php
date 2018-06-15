<?php 

/**
 * Seta os dados home da seção de teatro
 * "$teatroValues" = recebe um array com as informações
 * "argumento" = Complemento que irá definir a página destino
 * "imageSource" = Define qual imagem será utilizada 
 * "title" = Define qual será o h2
 * @return array contendo todos os conteudos das páginas 
 */
function teatroContent() : array {
	$teatroValues = 
            [
[
            "id" => "1",
            "argumento" => "atores",
            "imageSource" => "atores_300",
            "title" => "Atores"
	],
        [
            "id" => "2",
            "argumento" => "teatro_internas",
            "imageSource" => "bunraku_300",
            "title" => "Bunraku"
	],
        [
            "id" => "3",
            "argumento" => "teatro_internas",
            "imageSource" => "kabuki_300",
            "title" => "Kabuki"
	],
        [
            "id" => "4",
            "argumento" => "teatro_internas",
            "imageSource" => "kyogen_300",
            "title" => "Kyogen"
	],
        [
            "id" => "5",
            "argumento" => "teatro_internas",
            "imageSource" => "noh_300",
            "title" => "Noh"
	],
        [
            "id" => "6",
            "argumento" => "classicos",
            "imageSource" => "pecas_300",
            "title" => "Grandes Clássicos"
	]
            
    ];

	return $teatroValues;
}
/**
 * Seta os dados das thumbnails dos atores 
 * "$atoresValues" = recebe um array com as informações
 * "argumento" = Complemento que irá definir a página destino
 * "imageSource" = Define qual imagem será utilizada 
 * "title" = Define qual será o h2
 */
function atoresContent() : array {
    $atoresValues = [
        [
            "imageSource" => "chojuro_sawamura_V",
            "titulo" => "Chojuro Sawamura",
            "argumento" => "atores_internas"
        ],
        [
            "imageSource" => "iwai_hanshiro",
            "titulo" => "Iwai Hanshiro",
            "argumento" => "atores_internas"
        ],
        [
            "imageSource" => "danjuro_ichimura_VIII",
            "titulo" => "Danjuro Ichimura",
            "argumento" => "atores_internas"
        ],
        [
            "imageSource" => "danzo_ichikawa_V",
            "titulo" => "Danzo Ichikawa",
            "argumento" => "atores_internas"
        ],
        [
            "imageSource" => "ebijuro_ichikawa_I",
            "titulo" => "Ebijuro Ichikawa",
            "argumento" => "atores_internas"
        ],
        [
            "imageSource" => "ichikawa_danjuro_VIII",
            "titulo" => "Ichikawa Danjuro",
            "argumento" => "atores_internas"
        ]
    ];
    
    return $atoresValues;

}

function outrosAtores() : array {
    $outrosA = [
        [
            "img" => "chojuro_sawamura_V",
            "alt" => "ilustração do ator Chojuro Sawamura V",
            "argumento" => "",
            "titulo" => "Chojuro Sawamura V"
        ],
        [
            "img" => "danjuro_ichimura_VIII",
            "alt" => "ilustração do ator Danjuro Ichimura VIII",
            "argumento" => "",
            "titulo" => "Danjuro Ichimura VIII"
        ],
        [
            "img" => "danzo_ichikawa_V",
            "alt" => "ilustração do ator Danzo Ichikawa V",
            "argumento" => "",
            "titulo" => "Danzo Ichikawa V"
        ],
        [
            "img" => "ebijuro_ichikawa_I",
            "alt" => "ilustração do ator Ebijuro Ichikawa I",
            "argumento" => "",
            "titulo" => "Ebijuro Ichikawa I"
        ],
        [
            "img" => "ichikawa_danjuro_VIII",
            "alt" => "ilustração do ator Ichikawa Danjuro VIII",
            "argumento" => "",
            "titulo" => "Ichikawa Danjuro VIII"
        ],
        [
            "img" => "iwai_hanshiro",
            "alt" => "ilustração do ator Iwai Hanshiro",
            "argumento" => "",
            "titulo" => "Iwai Hanshiro"
        ]
    ];
}