<?php
    $teatros = teatroInternas();
    $page_id = $_GET["id"];
    $teatro = getIdArray( $page_id, $teatros);
    
?>
    <div class="container teatro_content">
        <h1 class="titulo text-center teatro_titulo_pos"><?=$teatro['title']?></h1>
            <div class="row text-justify">
                <p class="teatro_paragrafo col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet convallis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec hendrerit ac magna ac congue. Morbi quis leo porta, aliquam quam aliquam, gravida ipsum. Ut id interdum arcu. Sed tristique scelerisque purus. Vestibulum sit amet viverra risus. Praesent volutpat ex ac est pellentesque, eget mattis metus faucibus. Aliquam erat volutpat. Nulla ligula elit, ultricies quis sagittis eu, tempus sed leo. Phasellus volutpat erat risus, eget pretium massa condimentum id. Morbi mollis eleifend mauris tempor dignissim. Duis faucibus, arcu in feugiat pretium, nisl erat suscipit leo, a sodales dolor ante sit amet augue. Donec fermentum urna efficitur, congue diam nec, tincidunt enim. Nunc auctor id est iaculis condimentum. Fusce fermentum at mauris quis varius. Nam venenatis sem et malesuada laoreet. Maecenas condimentum commodo ipsum sit amet malesuada. Donec elementum arcu gravida magna semper lobortis. Praesent sit amet dui quam. Praesent scelerisque aliquam tempor. Nunc interdum eget nunc sed ullamcorper. Morbi eget nibh in felis dignissim mattis. Proin convallis cursus quam vel maximus. Nunc aliquam nisi urna, ut ultrices tellus imperdiet varius.</p>
                    <img class="cat_img img-fluid mx-auto d-block col-12 col-lg-6" src="midia/teatro/<?=$teatro['imagemUm']?>.jpg" alt="Imagem 1" style="width:auto;">
                    <img class="cat_img img-fluid mx-auto d-block col-12 col-lg-6" src="midia/teatro/<?=$teatro['imagemDois']?>.jpg" alt="Imagem 1" style="width:auto;">
                <p class="teatro_paragrafo col-12 col-lg-6">Aenean vitae lectus efficitur, vehicula magna in, sagittis felis. Maecenas finibus hendrerit tortor, finibus dictum erat feugiat vel. Nullam ut massa sapien. Nunc pretium elit vitae sapien lacinia, in vulputate lectus ornare. Nullam sodales elit sed augue venenatis placerat. Aenean sodales ultrices enim, at malesuada ex facilisis id. Sed in odio mi. Proin sollicitudin risus leo, eu faucibus purus aliquam varius. Suspendisse sed urna non nibh mattis sagittis. Cras ornare enim ante, quis semper ante auctor sit amet. In ipsum augue, mattis ut placerat sit amet, bibendum at elit. Nullam tellus nibh, vulputate eu placerat eget, faucibus ac nunc.</p>
                <p class="teatro_paragrafo col-12 col-lg-6">Cras placerat lacinia lacus imperdiet tincidunt. Suspendisse potenti. Nulla cursus et quam sagittis auctor. Quisque ex turpis, tincidunt eu consectetur at, consequat eu dolor. Nulla venenatis, dolor vel faucibus posuere, libero nulla sodales nisi, ac pellentesque arcu leo at justo. Pellentesque porttitor ante a ipsum ultricies, a elementum libero gravida. In vel venenatis mauris. Aenean in mattis justo. Fusce sagittis iaculis sem et volutpat. Aliquam erat volutpat. Nullam pretium vestibulum vestibulum. Suspendisse in tincidunt nulla. Nullam venenatis, turpis vel accumsan sodales, ligula ligula tristique nibh, eget rhoncus libero eros at felis.</p>
                <p class="ultimo_paragrafo col-12">Vivamus ultricies ultrices dui at pellentesque. In ut pretium urna. Ut sit amet sapien aliquam, vehicula ante id, ultricies sapien. Duis eget velit in ipsum bibendum vestibulum. Suspendisse pretium ante justo, eget aliquet metus ultrices non. Duis sed odio lacinia, fringilla ipsum at, dapibus leo. Phasellus et magna vel ligula efficitur viverra. Morbi sed arcu vitae felis molestie viverra et eget diam. Vivamus sit amet risus mollis, hendrerit risus vitae, tristique massa. Proin placerat iaculis nisl, vel laoreet nibh fringilla vitae. Etiam dictum mollis nisi ut venenatis. Nulla sit amet velit porttitor, elementum tellus quis, eleifend turpis. Sed magna ipsum, ullamcorper non urna id, pellentesque bibendum tellus. Sed consectetur, est ac tristique mollis, ex nulla dignissim quam, ac varius odio tortor et tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut malesuada at sem eget tristique. Maecenas pellentesque id metus id facilisis.Ut hendrerit neque nisi, ut maximus elit hendrerit cursus. Aenean posuere ipsum in magna feugiat bibendum. Pellentesque maximus tempus massa, vitae cursus dolor. Fusce tincidunt leo ut ultrices dapibus. Ut felis augue, consequat lacinia tellus eu, mattis dictum mauris. Donec ornare molestie purus, in fermentum enim condimentum vitae. Donec elit lacus, ultrices sed ligula vitae, semper blandit odio. Mauris vehicula aliquam egestas.</p>
            </div>
    </div>