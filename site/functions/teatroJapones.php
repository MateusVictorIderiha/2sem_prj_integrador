<?php  
/**
 * Retorna um array com todas as informações para a home da seção
 * 
 * @return array @teatroValues Contém todas as informações da home da seção
 */
function teatroContent() : array {
    $teatroValues = [
	[
            "id" => "",
            "argumento" => "atores",
            "imagem" => "atores_300",
	    "alt"=> "ator desconhecido",
	    "credito"=> "[Public domain or Public domain], via Wikimedia Commons",
            "title" => "Atores",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "1",
            "argumento" => "teatro_internas",
            "imagem" => "bunraku_300",
            "title" => "Bunraku",
	    "alt"=> "performance de uma peça de bunraku",
	    "credito"=> "By Ivan Fourie (Bunraku) [CC BY 2.0 (https://creativecommons.org/licenses/by/2.0)], via Wikimedia Commons",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "2",
            "argumento" => "teatro_internas",
            "imagem" => "kabuki_300",
            "title" => "Kabuki",
	    "alt"=> "garoto participa de um festival",
	    "credito"=> "By Flickr user: lensonjapan https://www.flickr.com/photos/lensonjapan/8679074379 [CC BY 2.0 (https://creativecommons.org/licenses/by/2.0/)]",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "3",
            "argumento" => "teatro_internas",
            "imagem" => "kyogen_300",	    
            "title" => "Kyogen",
	    "alt"=> "performance de uma peça de kyogen",
	    "credito"=> "By Corpse Reviver [CC BY-SA 3.0 (https://creativecommons.org/licenses/by/3.0], from Wikimedia Commons",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "4",
            "argumento" => "teatro_internas",
            "imagem" => "noh_300",
            "title" => "Noh",
	    "alt"=> "performance de uma peça de noh",
	    "credito"=> "By 松岡明芳 (松岡明芳) [GFDL (http://www.gnu.org/copyleft/fdl.html) or CC BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	],
        [
            "id" => "",
            "argumento" => "classicos",
            "imagem" => "pecas_300",
            "title" => "Grandes Clássicos",
	    "alt"=> "ilustração de uma clássica",
	    "credito"=> "[Public domain or Public domain], via Wikimedia Commons",
	    "texto" => "Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis."
	]       
    ];
    return $teatroValues;
}
/**
 * Atribui as informações no arquivo teatroInt.json ao array $teatroValues
 * 
 * @return array $teatroValues Array contendo as informações para as páginas internas das formas de teatro
 */
function teatroInternas() : array {
    $teatroValues = getDadosJson("dados/teatroInt.json");
    return $teatroValues;
}
/**
 * Atribui as informações no arquivo classicosInt.json ao array $classicoInfo
 * 
 * @return array $classicoInfo Array contendo as informações para as páginas internas dos filmes e peças 
 */
function classicosInterna() : array {
    $classicoInfo = getDadosJson("dados/classicosInt.json");
    return $classicoInfo;
}
/**
 * Atribui as informações no arquivo classicosInt.json ao array $classicoInfo
 * 
 * @return array $atoresValues Array contendo as informações para as páginas biograficas dos atores
 */
function atoresContent() : array {
    $atoresValues = getDadosJson("dados/atoresInt.json");
    return $atoresValues;
}
