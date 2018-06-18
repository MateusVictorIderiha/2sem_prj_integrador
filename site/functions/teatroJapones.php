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
	    "alt"=> "",
	    "credito"=> "",
            "title" => "Atores",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "2",
            "argumento" => "teatro_internas",
            "imageSource" => "bunraku_300",
	    "imagemUm" => "bunraku_1_450",
            "imagemDois" => "bunraku_2_450",
            "title" => "Bunraku",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "3",
            "argumento" => "teatro_internas",
            "imageSource" => "kabuki_300",
            "imagemUm" => "kabuki_1_450",
            "imagemDois" => "kabuki_2_450",
            "title" => "Kabuki",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "4",
            "argumento" => "teatro_internas",
            "imageSource" => "kyogen_300",
            "imagemUm" => "kyogen_1_450",
            "imagemDois" => "kyogen_2_450",	    
            "title" => "Kyogen",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "5",
            "argumento" => "teatro_internas",
	    "imagemUm" => "noh_1_450",
            "imagemDois" => "noh_2_450",
            "imageSource" => "noh_300",
            "title" => "Noh",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "6",
            "argumento" => "classicos",
            "imageSource" => "pecas_300",
            "title" => "Grandes Clássicos",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	]
            
    ];

	return $teatroValues;
}
function teatroInternas() : array {
	$teatroValues = 
            [
        [
            "id" => "2",
            "argumento" => "teatro_internas",
            "imageSource" => "bunraku_300",
	    "imagemUm" => "bunraku_1_450",
            "imagemDois" => "bunraku_2_450",
            "title" => "Bunraku",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "3",
            "argumento" => "teatro_internas",
            "imageSource" => "kabuki_300",
            "imagemUm" => "kabuki_1_450",
            "imagemDois" => "kabuki_2_450",
            "title" => "Kabuki",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "4",
            "argumento" => "teatro_internas",
            "imageSource" => "kyogen_300",
            "imagemUm" => "kyogen_1_450",
            "imagemDois" => "kyogen_2_450",	    
            "title" => "Kyogen",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "5",
            "argumento" => "teatro_internas",
	    "imagemUm" => "noh_1_450",
            "imagemDois" => "noh_2_450",
            "imageSource" => "noh_300",
            "title" => "Noh",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	] 
    ];

	return $teatroValues;
}
/**
 * Seta os dados das pe�as na P�gina Cl�ssicos 
 * "$pecasInfo" = recebe um array com as informa��es
 * "id" = N�mero utilizado na identifica��o
 * "imageSource" = Define qual imagem ser� utilizada
 * "alt" = descri��o da imagem
 * "credito" = atribui��o ao dono da imagem e licen�a no qual a propriedade � resguardada 
 * "argumento" = Complemento que ir� definir a p�gina destino
 * "titulo" = Define qual ser� o nome no link
 */
function pecasContent() : array {
    $pecasInfo = [
        [
	    "id" => "1",
            "imageSource" => "peca_yoshitsune_senbon_zakura_300",
	    "alt" => "ilustra��o da pe�a Yoshitsune Senbon Zakura",
	    "credito" => "(yoshitsune senbon zakura) [Public domain], via Wikimedia Commons",
            "titulo" => "Yoshitsune Senbon Zakura",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "2",
            "imageSource" => "peca_kanade_hon_chushingura_300",
	    "alt" => "ilustra��o da pe�a kanadehon chushingura",
	    "credito" => "(kanadehon ch?shingura) By Yamazaki Toshinobu II (1866-1903) (Honolulu Museum of Art) [Public domain], via Wikimedia Commons",
            "titulo" => "Kanade-hon Chushingura",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "3",
            "imageSource" => "peca_dan_no_ura_kabuto_gunki_300",
	    "alt" => "ilustra��o da pe�a dan no ura kabuto gunki",
	    "credito" => "(dan no ura kabuto gunki) [Public domain], via Wikimedia Commons",
            "titulo" => "Dan no Ura Kabuto Gunki",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "4",
            "imageSource" => "peca_sugawara_denju_tenarai_kagami_300",
	    "alt" => "ilustra��o da pe�a suguwara denji tenari kagami",
	    "credito" => "(suguwara denji tenari kagami) [Public domain], via Wikimedia Commons",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas"
        ]
    ];
    
    return $pecasInfo;

}
/**
 * Seta os dados das filmes na P�gina Cl�ssicos 
 * "$cinemaInfo" = recebe um array com as informa��es
 * "id" = N�mero utilizado na identifica��o
 * "imageSource" = Define qual imagem ser� utilizada
 * "alt" = descri��o da imagem
 * "credito" = atribui��o ao dono da imagem e licen�a no qual a propriedade � resguardada 
 * "argumento" = Complemento que ir� definir a p�gina destino
 * "titulo" = Define qual ser� o nome no link
 */
function cinemaContent() : array {
    $cinemaInfo = [
        [
	    "id" => "5",
            "imageSource" => "ran_300",
	    "alt" => "Cena do filme Ran",
            "titulo" => "Ran - 1985",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "6",
            "imageSource" => "rashomon_300",
	    "alt" => "Cena do filme Rashomon",
            "titulo" => "Rashomon - 1950",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "7",
            "imageSource" => "sonhos_300",
	    "alt" => "cena do filme sonhos",
            "titulo" => "Sonhos - 1990",
            "argumento" => "classicos_internas"
	],
        [
	    "id" => "8",
            "imageSource" => "trono_de_sangue_300",
	    "alt" => "cena do filme trono manchado de sangue",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas"
        ]
    ];
    
    return $cinemaInfo;

}
/**
 * Seta os dados das pe�as na P�gina Cl�ssicos 
 * "$pecasInfo" = recebe um array com as informa��es
 * "id" = N�mero utilizado na identifica��o
 * "imageSource" = Define qual imagem ser� utilizada
 * "alt" = descri��o da imagem
 * "credito" = atribui��o ao dono da imagem e licen�a no qual a propriedade � resguardada 
 * "argumento" = Complemento que ir� definir a p�gina destino
 * "titulo" = Define qual ser� o nome no link
 */
function classicosInterna() : array {
    $classicoInfo = [
        [
	    "id" => "1",
            "imageSource" => "peca_yoshitsune_senbon_zakura_300",
	    "alt" => "ilustra��o da pe�a Yoshitsune Senbon Zakura",
	    "credito" => "(yoshitsune senbon zakura) [Public domain], via Wikimedia Commons",
            "titulo" => "Yoshitsune Senbon Zakura",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "2",
            "imageSource" => "peca_kanade_hon_chushingura_300",
	    "alt" => "ilustra��o da pe�a kanadehon chushingura",
	    "credito" => "(kanadehon ch?shingura) By Yamazaki Toshinobu II (1866-1903) (Honolulu Museum of Art) [Public domain], via Wikimedia Commons",
            "titulo" => "Kanade-hon Chushingura",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "3",
            "imageSource" => "peca_dan_no_ura_kabuto_gunki_300",
	    "alt" => "ilustra��o da pe�a dan no ura kabuto gunki",
	    "credito" => "(dan no ura kabuto gunki) [Public domain], via Wikimedia Commons",
            "titulo" => "Dan no Ura Kabuto Gunki",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "4",
            "imageSource" => "peca_sugawara_denju_tenarai_kagami_300",
	    "alt" => "ilustra��o da pe�a suguwara denji tenari kagami",
	    "credito" => "(suguwara denji tenari kagami) [Public domain], via Wikimedia Commons",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
	[
	    "id" => "5",
            "imageSource" => "ran_300",
	    "alt" => "Cena do filme Ran",
	    "credito" => "",
            "titulo" => "Ran - 1985",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "6",
            "imageSource" => "rashomon_300",
	    "alt" => "Cena do filme Rashomon",
	    "credito" => "",
            "titulo" => "Rashomon - 1950",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
	    
        ],
        [
	    "id" => "7",
            "imageSource" => "sonhos_300",
	    "alt" => "cena do filme sonhos",
	    "credito" => "",
            "titulo" => "Sonhos - 1990",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "8",
            "imageSource" => "trono_de_sangue_300",
	    "alt" => "cena do filme trono manchado de sangue",
	    "credito" => "",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    
        ]
    ];
    
    return $classicoInfo;

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
	    "id" => "1",
            "imageSource" => "chojuro_sawamura_V",
	    "alt" => "ilustra��o do ator chojuro sawamura",
	    "credito" => "[Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Chojuro Sawamura",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "2",
            "imageSource" => "iwai_hanshiro",
	    "alt" => "ilustra��o do ator iwai hanshiro",
	    "credito" => " [Public domain or CC BY-SA 4.0 (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia Commons",
            "titulo" => "Iwai Hanshiro",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "3",
            "imageSource" => "danjuro_ichimura_VIII",
	    "alt" => "ilustra��o do ator Danjuro Ichimura",
	    "credito" => "[Public domain], via Wikimedia Commons",
            "titulo" => "Danjuro Ichimura",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "4",
            "imageSource" => "danzo_ichikawa_V",
	    "alt" => "ilustra��o do ator danzo ichikawa",
	    "credito" => "[Public domain, Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Danzo Ichikawa",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "5",
            "imageSource" => "ebijuro_ichikawa_I",
	    "alt" => "ilustra��o do ator ebijuro ichikawa",
	    "credito" => "[Public domain], via Wikimedia Commons",
            "titulo" => "Ebijuro Ichikawa",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => ""
        ],
        [
	    "id" => "6",
            "imageSource" => "ichikawa_danjuro_VIII",
	    "alt" => "ilustra��o do ator ichikawa danjuro",
	    "credito" => "[Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Ichikawa Danjuro",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => ""
        ]
    ];
    
    return $atoresValues;

}