<?php  

function teatroContent() : array {
	$teatroValues = 
            [
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
function teatroInternas() : array {
	$teatroValues = 
            [
        [
            "id" => "1",
            "argumento" => "teatro_internas",
            "title" => "Bunraku",
	    "imagemUm" => "bunraku_1_450",
            "altUm" => "homem segurada uma marionete com ajuda de artista",
            "creditoUm" => "By Flickr user: Leonardo Boiko https://www.flickr.com/photos/leoboiko/9171231151 [CC BY 2.0 (https://creativecommons.org/licenses/by/2.0/)]",
            "imagemDois" => "bunraku_2_450",
            "altDois" => "garota segura uma marionete",
            "creditoDois" => "By Flickr user: Leonardo Boiko https://www.flickr.com/photos/leoboiko/9171232543 [CC BY 2.0 (https://creativecommons.org/licenses/by/2.0/)]",
	    "paragrafoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet convallis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec hendrerit ac magna ac congue. Morbi quis leo porta, aliquam quam aliquam, gravida ipsum. Ut id interdum arcu. Sed tristique scelerisque purus. Vestibulum sit amet viverra risus. Praesent volutpat ex ac est pellentesque, eget mattis metus faucibus. Aliquam erat volutpat. Nulla ligula elit, ultricies quis sagittis eu, tempus sed leo. Phasellus volutpat erat risus, eget pretium massa condimentum id. Morbi mollis eleifend mauris tempor dignissim. Duis faucibus, arcu in feugiat pretium, nisl erat suscipit leo, a sodales dolor ante sit amet augue. Donec fermentum urna efficitur, congue diam nec, tincidunt enim. Nunc auctor id est iaculis condimentum. Fusce fermentum at mauris quis varius. Nam venenatis sem et malesuada laoreet. Maecenas condimentum commodo ipsum sit amet malesuada. Donec elementum arcu gravida magna semper lobortis. Praesent sit amet dui quam. Praesent scelerisque aliquam tempor. Nunc interdum eget nunc sed ullamcorper. Morbi eget nibh in felis dignissim mattis. Proin convallis cursus quam vel maximus. Nunc aliquam nisi urna, ut ultrices tellus imperdiet varius.",
            "paragrafoDois" => "Aenean vitae lectus efficitur, vehicula magna in, sagittis felis. Maecenas finibus hendrerit tortor, finibus dictum erat feugiat vel. Nullam ut massa sapien. Nunc pretium elit vitae sapien lacinia, in vulputate lectus ornare. Nullam sodales elit sed augue venenatis placerat. Aenean sodales ultrices enim, at malesuada ex facilisis id. Sed in odio mi. Proin sollicitudin risus leo, eu faucibus purus aliquam varius. Suspendisse sed urna non nibh mattis sagittis. Cras ornare enim ante, quis semper ante auctor sit amet. In ipsum augue, mattis ut placerat sit amet, bibendum at elit. Nullam tellus nibh, vulputate eu placerat eget, faucibus ac nunc.",
            "paragrafoTres" => "Cras placerat lacinia lacus imperdiet tincidunt. Suspendisse potenti. Nulla cursus et quam sagittis auctor. Quisque ex turpis, tincidunt eu consectetur at, consequat eu dolor. Nulla venenatis, dolor vel faucibus posuere, libero nulla sodales nisi, ac pellentesque arcu leo at justo. Pellentesque porttitor ante a ipsum ultricies, a elementum libero gravida. In vel venenatis mauris. Aenean in mattis justo. Fusce sagittis iaculis sem et volutpat. Aliquam erat volutpat. Nullam pretium vestibulum vestibulum. Suspendisse in tincidunt nulla. Nullam venenatis, turpis vel accumsan sodales, ligula ligula tristique nibh, eget rhoncus libero eros at felis.",
            "paragrafoQuatro" => "Vivamus ultricies ultrices dui at pellentesque. In ut pretium urna. Ut sit amet sapien aliquam, vehicula ante id, ultricies sapien. Duis eget velit in ipsum bibendum vestibulum. Suspendisse pretium ante justo, eget aliquet metus ultrices non. Duis sed odio lacinia, fringilla ipsum at, dapibus leo. Phasellus et magna vel ligula efficitur viverra. Morbi sed arcu vitae felis molestie viverra et eget diam. Vivamus sit amet risus mollis, hendrerit risus vitae, tristique massa. Proin placerat iaculis nisl, vel laoreet nibh fringilla vitae. Etiam dictum mollis nisi ut venenatis. Nulla sit amet velit porttitor, elementum tellus quis, eleifend turpis. Sed magna ipsum, ullamcorper non urna id, pellentesque bibendum tellus. Sed consectetur, est ac tristique mollis, ex nulla dignissim quam, ac varius odio tortor et tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut malesuada at sem eget tristique. Maecenas pellentesque id metus id facilisis.Ut hendrerit neque nisi, ut maximus elit hendrerit cursus. Aenean posuere ipsum in magna feugiat bibendum. Pellentesque maximus tempus massa, vitae cursus dolor. Fusce tincidunt leo ut ultrices dapibus. Ut felis augue, consequat lacinia tellus eu, mattis dictum mauris. Donec ornare molestie purus, in fermentum enim condimentum vitae. Donec elit lacus, ultrices sed ligula vitae, semper blandit odio. Mauris vehicula aliquam egestas."
	],
        [
            "id" => "2",
            "argumento" => "teatro_internas",
            "title" => "Kabuki",
            "imagemUm" => "kabuki_1_450",
            "altUm" => "diorama representando uma apresentação de kabuki",
            "creditoUm" => "Joe Mabel [CC BY-SA 2.0 (https://creativecommons.org/licenses/by-sa/2.0), CC BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0) or GFDL (http://www.gnu.org/copyleft/fdl.html)], via Wikimedia Commons",
            "imagemDois" => "kabuki_2_450",
            "altDois" => "performance de uma peça de kabuki em londres",
            "creditoDois" => "By Flickr user: GanMed64 https://www.flickr.com/people/ganmed64/ [CC BY 2.0 (https://creativecommons.org/licenses/by/2.0)], via Wikimedia Commons",
	    "paragrafoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet convallis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec hendrerit ac magna ac congue. Morbi quis leo porta, aliquam quam aliquam, gravida ipsum. Ut id interdum arcu. Sed tristique scelerisque purus. Vestibulum sit amet viverra risus. Praesent volutpat ex ac est pellentesque, eget mattis metus faucibus. Aliquam erat volutpat. Nulla ligula elit, ultricies quis sagittis eu, tempus sed leo. Phasellus volutpat erat risus, eget pretium massa condimentum id. Morbi mollis eleifend mauris tempor dignissim. Duis faucibus, arcu in feugiat pretium, nisl erat suscipit leo, a sodales dolor ante sit amet augue. Donec fermentum urna efficitur, congue diam nec, tincidunt enim. Nunc auctor id est iaculis condimentum. Fusce fermentum at mauris quis varius. Nam venenatis sem et malesuada laoreet. Maecenas condimentum commodo ipsum sit amet malesuada. Donec elementum arcu gravida magna semper lobortis. Praesent sit amet dui quam. Praesent scelerisque aliquam tempor. Nunc interdum eget nunc sed ullamcorper. Morbi eget nibh in felis dignissim mattis. Proin convallis cursus quam vel maximus. Nunc aliquam nisi urna, ut ultrices tellus imperdiet varius.",
            "paragrafoDois" => "Aenean vitae lectus efficitur, vehicula magna in, sagittis felis. Maecenas finibus hendrerit tortor, finibus dictum erat feugiat vel. Nullam ut massa sapien. Nunc pretium elit vitae sapien lacinia, in vulputate lectus ornare. Nullam sodales elit sed augue venenatis placerat. Aenean sodales ultrices enim, at malesuada ex facilisis id. Sed in odio mi. Proin sollicitudin risus leo, eu faucibus purus aliquam varius. Suspendisse sed urna non nibh mattis sagittis. Cras ornare enim ante, quis semper ante auctor sit amet. In ipsum augue, mattis ut placerat sit amet, bibendum at elit. Nullam tellus nibh, vulputate eu placerat eget, faucibus ac nunc.",
            "paragrafoTres" => "Cras placerat lacinia lacus imperdiet tincidunt. Suspendisse potenti. Nulla cursus et quam sagittis auctor. Quisque ex turpis, tincidunt eu consectetur at, consequat eu dolor. Nulla venenatis, dolor vel faucibus posuere, libero nulla sodales nisi, ac pellentesque arcu leo at justo. Pellentesque porttitor ante a ipsum ultricies, a elementum libero gravida. In vel venenatis mauris. Aenean in mattis justo. Fusce sagittis iaculis sem et volutpat. Aliquam erat volutpat. Nullam pretium vestibulum vestibulum. Suspendisse in tincidunt nulla. Nullam venenatis, turpis vel accumsan sodales, ligula ligula tristique nibh, eget rhoncus libero eros at felis.",
            "paragrafoQuatro" => "Vivamus ultricies ultrices dui at pellentesque. In ut pretium urna. Ut sit amet sapien aliquam, vehicula ante id, ultricies sapien. Duis eget velit in ipsum bibendum vestibulum. Suspendisse pretium ante justo, eget aliquet metus ultrices non. Duis sed odio lacinia, fringilla ipsum at, dapibus leo. Phasellus et magna vel ligula efficitur viverra. Morbi sed arcu vitae felis molestie viverra et eget diam. Vivamus sit amet risus mollis, hendrerit risus vitae, tristique massa. Proin placerat iaculis nisl, vel laoreet nibh fringilla vitae. Etiam dictum mollis nisi ut venenatis. Nulla sit amet velit porttitor, elementum tellus quis, eleifend turpis. Sed magna ipsum, ullamcorper non urna id, pellentesque bibendum tellus. Sed consectetur, est ac tristique mollis, ex nulla dignissim quam, ac varius odio tortor et tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut malesuada at sem eget tristique. Maecenas pellentesque id metus id facilisis.Ut hendrerit neque nisi, ut maximus elit hendrerit cursus. Aenean posuere ipsum in magna feugiat bibendum. Pellentesque maximus tempus massa, vitae cursus dolor. Fusce tincidunt leo ut ultrices dapibus. Ut felis augue, consequat lacinia tellus eu, mattis dictum mauris. Donec ornare molestie purus, in fermentum enim condimentum vitae. Donec elit lacus, ultrices sed ligula vitae, semper blandit odio. Mauris vehicula aliquam egestas."
	],
        [
            "id" => "3",
            "argumento" => "teatro_internas",
            "title" => "Kyogen",
            "imagemUm" => "kyogen_1_450",
            "altUm" => "apresentação de kyogen numa praça",
            "creditoUm" => "By Flickr user: Chris Gladis https://www.flickr.com/photos/mshades/132278442/in/photostream/ [CC BY 2.0 (https://creativecommons.org/licenses/by-nd/2.0/)]",
            "imagemDois" => "kyogen_2_450",
            "altDois" => "apresentação de kyogen numa praça",
	    "creditoDois" => "By Flickr user: Chris Gladis https://www.flickr.com/photos/mshades/132278344/in/photostream/ [CC BY 2.0 (https://creativecommons.org/licenses/by-nd/2.0/)]",
	    "paragrafoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet convallis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec hendrerit ac magna ac congue. Morbi quis leo porta, aliquam quam aliquam, gravida ipsum. Ut id interdum arcu. Sed tristique scelerisque purus. Vestibulum sit amet viverra risus. Praesent volutpat ex ac est pellentesque, eget mattis metus faucibus. Aliquam erat volutpat. Nulla ligula elit, ultricies quis sagittis eu, tempus sed leo. Phasellus volutpat erat risus, eget pretium massa condimentum id. Morbi mollis eleifend mauris tempor dignissim. Duis faucibus, arcu in feugiat pretium, nisl erat suscipit leo, a sodales dolor ante sit amet augue. Donec fermentum urna efficitur, congue diam nec, tincidunt enim. Nunc auctor id est iaculis condimentum. Fusce fermentum at mauris quis varius. Nam venenatis sem et malesuada laoreet. Maecenas condimentum commodo ipsum sit amet malesuada. Donec elementum arcu gravida magna semper lobortis. Praesent sit amet dui quam. Praesent scelerisque aliquam tempor. Nunc interdum eget nunc sed ullamcorper. Morbi eget nibh in felis dignissim mattis. Proin convallis cursus quam vel maximus. Nunc aliquam nisi urna, ut ultrices tellus imperdiet varius.",
            "paragrafoDois" => "Aenean vitae lectus efficitur, vehicula magna in, sagittis felis. Maecenas finibus hendrerit tortor, finibus dictum erat feugiat vel. Nullam ut massa sapien. Nunc pretium elit vitae sapien lacinia, in vulputate lectus ornare. Nullam sodales elit sed augue venenatis placerat. Aenean sodales ultrices enim, at malesuada ex facilisis id. Sed in odio mi. Proin sollicitudin risus leo, eu faucibus purus aliquam varius. Suspendisse sed urna non nibh mattis sagittis. Cras ornare enim ante, quis semper ante auctor sit amet. In ipsum augue, mattis ut placerat sit amet, bibendum at elit. Nullam tellus nibh, vulputate eu placerat eget, faucibus ac nunc.",
            "paragrafoTres" => "Cras placerat lacinia lacus imperdiet tincidunt. Suspendisse potenti. Nulla cursus et quam sagittis auctor. Quisque ex turpis, tincidunt eu consectetur at, consequat eu dolor. Nulla venenatis, dolor vel faucibus posuere, libero nulla sodales nisi, ac pellentesque arcu leo at justo. Pellentesque porttitor ante a ipsum ultricies, a elementum libero gravida. In vel venenatis mauris. Aenean in mattis justo. Fusce sagittis iaculis sem et volutpat. Aliquam erat volutpat. Nullam pretium vestibulum vestibulum. Suspendisse in tincidunt nulla. Nullam venenatis, turpis vel accumsan sodales, ligula ligula tristique nibh, eget rhoncus libero eros at felis.",
            "paragrafoQuatro" => "Vivamus ultricies ultrices dui at pellentesque. In ut pretium urna. Ut sit amet sapien aliquam, vehicula ante id, ultricies sapien. Duis eget velit in ipsum bibendum vestibulum. Suspendisse pretium ante justo, eget aliquet metus ultrices non. Duis sed odio lacinia, fringilla ipsum at, dapibus leo. Phasellus et magna vel ligula efficitur viverra. Morbi sed arcu vitae felis molestie viverra et eget diam. Vivamus sit amet risus mollis, hendrerit risus vitae, tristique massa. Proin placerat iaculis nisl, vel laoreet nibh fringilla vitae. Etiam dictum mollis nisi ut venenatis. Nulla sit amet velit porttitor, elementum tellus quis, eleifend turpis. Sed magna ipsum, ullamcorper non urna id, pellentesque bibendum tellus. Sed consectetur, est ac tristique mollis, ex nulla dignissim quam, ac varius odio tortor et tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut malesuada at sem eget tristique. Maecenas pellentesque id metus id facilisis.Ut hendrerit neque nisi, ut maximus elit hendrerit cursus. Aenean posuere ipsum in magna feugiat bibendum. Pellentesque maximus tempus massa, vitae cursus dolor. Fusce tincidunt leo ut ultrices dapibus. Ut felis augue, consequat lacinia tellus eu, mattis dictum mauris. Donec ornare molestie purus, in fermentum enim condimentum vitae. Donec elit lacus, ultrices sed ligula vitae, semper blandit odio. Mauris vehicula aliquam egestas."
	],
        [
            "id" => "4",
            "argumento" => "teatro_internas",
            "title" => "Noh",
	    "imagemUm" => "noh_1_450",
            "altUm" => "homem usa mascara tipica do genero num festival",
            "creditoUm" => "By No machine-readable author provided. Geomr~commonswiki assumed (based on copyright claims). [GFDL (http://www.gnu.org/copyleft/fdl.html), CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0/) or CC BY-SA 2.5 (https://creativecommons.org/licenses/by-sa/2.5)], via Wikimedia Commons",
            "imagemDois" => "noh_2_450",
	    "altDois" => "o mais antigo palco do japão",
            "creditoDois" => "Arcimboldo. [GCC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0/)], via Wikimedia Commons
",
	    "paragrafoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet convallis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec hendrerit ac magna ac congue. Morbi quis leo porta, aliquam quam aliquam, gravida ipsum. Ut id interdum arcu. Sed tristique scelerisque purus. Vestibulum sit amet viverra risus. Praesent volutpat ex ac est pellentesque, eget mattis metus faucibus. Aliquam erat volutpat. Nulla ligula elit, ultricies quis sagittis eu, tempus sed leo. Phasellus volutpat erat risus, eget pretium massa condimentum id. Morbi mollis eleifend mauris tempor dignissim. Duis faucibus, arcu in feugiat pretium, nisl erat suscipit leo, a sodales dolor ante sit amet augue. Donec fermentum urna efficitur, congue diam nec, tincidunt enim. Nunc auctor id est iaculis condimentum. Fusce fermentum at mauris quis varius. Nam venenatis sem et malesuada laoreet. Maecenas condimentum commodo ipsum sit amet malesuada. Donec elementum arcu gravida magna semper lobortis. Praesent sit amet dui quam. Praesent scelerisque aliquam tempor. Nunc interdum eget nunc sed ullamcorper. Morbi eget nibh in felis dignissim mattis. Proin convallis cursus quam vel maximus. Nunc aliquam nisi urna, ut ultrices tellus imperdiet varius.",
            "paragrafoDois" => "Aenean vitae lectus efficitur, vehicula magna in, sagittis felis. Maecenas finibus hendrerit tortor, finibus dictum erat feugiat vel. Nullam ut massa sapien. Nunc pretium elit vitae sapien lacinia, in vulputate lectus ornare. Nullam sodales elit sed augue venenatis placerat. Aenean sodales ultrices enim, at malesuada ex facilisis id. Sed in odio mi. Proin sollicitudin risus leo, eu faucibus purus aliquam varius. Suspendisse sed urna non nibh mattis sagittis. Cras ornare enim ante, quis semper ante auctor sit amet. In ipsum augue, mattis ut placerat sit amet, bibendum at elit. Nullam tellus nibh, vulputate eu placerat eget, faucibus ac nunc.",
            "paragrafoTres" => "Cras placerat lacinia lacus imperdiet tincidunt. Suspendisse potenti. Nulla cursus et quam sagittis auctor. Quisque ex turpis, tincidunt eu consectetur at, consequat eu dolor. Nulla venenatis, dolor vel faucibus posuere, libero nulla sodales nisi, ac pellentesque arcu leo at justo. Pellentesque porttitor ante a ipsum ultricies, a elementum libero gravida. In vel venenatis mauris. Aenean in mattis justo. Fusce sagittis iaculis sem et volutpat. Aliquam erat volutpat. Nullam pretium vestibulum vestibulum. Suspendisse in tincidunt nulla. Nullam venenatis, turpis vel accumsan sodales, ligula ligula tristique nibh, eget rhoncus libero eros at felis.",
            "paragrafoQuatro" => "Vivamus ultricies ultrices dui at pellentesque. In ut pretium urna. Ut sit amet sapien aliquam, vehicula ante id, ultricies sapien. Duis eget velit in ipsum bibendum vestibulum. Suspendisse pretium ante justo, eget aliquet metus ultrices non. Duis sed odio lacinia, fringilla ipsum at, dapibus leo. Phasellus et magna vel ligula efficitur viverra. Morbi sed arcu vitae felis molestie viverra et eget diam. Vivamus sit amet risus mollis, hendrerit risus vitae, tristique massa. Proin placerat iaculis nisl, vel laoreet nibh fringilla vitae. Etiam dictum mollis nisi ut venenatis. Nulla sit amet velit porttitor, elementum tellus quis, eleifend turpis. Sed magna ipsum, ullamcorper non urna id, pellentesque bibendum tellus. Sed consectetur, est ac tristique mollis, ex nulla dignissim quam, ac varius odio tortor et tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut malesuada at sem eget tristique. Maecenas pellentesque id metus id facilisis.Ut hendrerit neque nisi, ut maximus elit hendrerit cursus. Aenean posuere ipsum in magna feugiat bibendum. Pellentesque maximus tempus massa, vitae cursus dolor. Fusce tincidunt leo ut ultrices dapibus. Ut felis augue, consequat lacinia tellus eu, mattis dictum mauris. Donec ornare molestie purus, in fermentum enim condimentum vitae. Donec elit lacus, ultrices sed ligula vitae, semper blandit odio. Mauris vehicula aliquam egestas."
	] 
    ];

	return $teatroValues;
}

function pecasContent() : array {
    $pecasInfo = [
        [
	    "id" => "1",
            "imagem" => "peca_yoshitsune_senbon_zakura_300",
	    "alt" => "ilustrações da peça Yoshitsune Senbon Zakura",
	    "credito" => "(yoshitsune senbon zakura) [Public domain], via Wikimedia Commons",
            "titulo" => "Yoshitsune Senbon Zakura",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "2",
            "imagem" => "peca_kanade_hon_chushingura_300",
	    "alt" => "ilustração da pela kanadehon chushingura",
	    "credito" => "(kanadehon ch?shingura) By Yamazaki Toshinobu II (1866-1903) (Honolulu Museum of Art) [Public domain], via Wikimedia Commons",
            "titulo" => "Kanade-hon Chushingura",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "3",
            "imagem" => "peca_dan_no_ura_kabuto_gunki_300",
	    "alt" => "ilustração da peça dan no ura kabuto gunki",
	    "credito" => "(dan no ura kabuto gunki) [Public domain], via Wikimedia Commons",
            "titulo" => "Dan no Ura Kabuto Gunki",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "4",
            "imagem" => "peca_sugawara_denju_tenarai_kagami_300",
	    "alt" => "ilustração da peça suguwara denji tenari kagami",
	    "credito" => "(suguwara denji tenari kagami) [Public domain], via Wikimedia Commons",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas"
        ]
    ];
    
    return $pecasInfo;

}

function cinemaContent() : array {
    $cinemaInfo = [
        [
	    "id" => "5",
            "imagem" => "ran_300",
	    "alt" => "Cena do filme Ran",
            "titulo" => "Ran - 1985",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "6",
            "imagem" => "rashomon_300",
	    "alt" => "Cena do filme Rashomon",
            "titulo" => "Rashomon - 1950",
            "argumento" => "classicos_internas"
        ],
        [
	    "id" => "7",
            "imagem" => "sonhos_300",
	    "alt" => "cena do filme sonhos",
            "titulo" => "Sonhos - 1990",
            "argumento" => "classicos_internas"
	],
        [
	    "id" => "8",
            "imagem" => "trono_de_sangue_300",
	    "alt" => "cena do filme trono manchado de sangue",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas"
        ]
    ];
    
    return $cinemaInfo;

}
function classicosInterna() : array {
    $classicoInfo = [
        [
	    "id" => "1",
            "imagem" => "peca_yoshitsune_senbon_zakura_300",
	    "alt" => "ilustração da pe�a Yoshitsune Senbon Zakura",
	    "credito" => "(yoshitsune senbon zakura) [Public domain], via Wikimedia Commons",
            "titulo" => "Yoshitsune Senbon Zakura",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "2",
            "imagem" => "peca_kanade_hon_chushingura_300",
	    "alt" => "ilustração da peça kanadehon chushingura",
	    "credito" => "(kanadehon chishingura) By Yamazaki Toshinobu II (1866-1903) (Honolulu Museum of Art) [Public domain], via Wikimedia Commons",
            "titulo" => "Kanade-hon Chushingura",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "3",
            "imagem" => "peca_dan_no_ura_kabuto_gunki_300",
	    "alt" => "ilustração da peça dan no ura kabuto gunki",
	    "credito" => "(dan no ura kabuto gunki) [Public domain], via Wikimedia Commons",
            "titulo" => "Dan no Ura Kabuto Gunki",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "4",
            "imagem" => "peca_sugawara_denju_tenarai_kagami_300",
	    "alt" => "ilustração da peça suguwara denji tenari kagami",
	    "credito" => "(suguwara denji tenari kagami) [Public domain], via Wikimedia Commons",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
	[
	    "id" => "5",
            "imagem" => "ran_300",
	    "alt" => "Cena do filme Ran",
	    "credito" => "",
            "titulo" => "Ran - 1985",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "6",
            "imagem" => "rashomon_300",
	    "alt" => "Cena do filme Rashomon",
	    "credito" => "",
            "titulo" => "Rashomon - 1950",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
	    
        ],
        [
	    "id" => "7",
            "imagem" => "sonhos_300",
	    "alt" => "cena do filme sonhos",
	    "credito" => "",
            "titulo" => "Sonhos - 1990",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "8",
            "imagem" => "trono_de_sangue_300",
	    "alt" => "cena do filme trono manchado de sangue",
	    "credito" => "",
            "titulo" => "Suguwara Denji Tenarai Kagami",
            "argumento" => "classicos_internas",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    
        ]
    ];
    
    return $classicoInfo;

}
function atoresContent() : array {
    $atoresValues = [
        [
	    "id" => "1",
            "imagem" => "chojuro_sawamura_V",
	    "alt" => "ilustração do ator chojuro sawamura",
	    "credito" => "[Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Chojuro Sawamura",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "2",
            "imagem" => "iwai_hanshiro",
	    "alt" => "ilustração do ator iwai hanshiro",
	    "credito" => "[Public domain or CC BY-SA 4.0 (https://creativecommons.org/licenses/by-sa/4.0)], from Wikimedia Commons",
            "titulo" => "Iwai Hanshiro",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "3",
            "imagem" => "danjuro_ichimura_VIII",
	    "alt" => "ilustração do ator Danjuro Ichimura",
	    "credito" => "[Public domain], via Wikimedia Commons",
            "titulo" => "Danjuro Ichimura",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "4",
            "imagem" => "danzo_ichikawa_V",
	    "alt" => "ilustração do ator danzo ichikawa",
	    "credito" => "[Public domain, Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Danzo Ichikawa",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "5",
            "imagem" => "ebijuro_ichikawa_I",
	    "alt" => "ilustração do ator ebijuro ichikawa",
	    "credito" => "[Public domain], via Wikimedia Commons",
            "titulo" => "Ebijuro Ichikawa",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ],
        [
	    "id" => "6",
            "imagem" => "ichikawa_danjuro_VIII",
	    "alt" => "ilustração do ator ichikawa danjuro",
	    "credito" => "[Public domain or Public domain], via Wikimedia Commons",
            "titulo" => "Ichikawa Danjuro",
            "argumento" => "atores_internas",
	    "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
	    "textoUm" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et.",
	    "textoDois" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero."
        ]
    ];
    
    return $atoresValues;

}
