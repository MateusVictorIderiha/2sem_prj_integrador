    <div class="container teatro_content">
        <div class="row">
            <article class="col-12 teatro_article">
                <h1 class="titulo">Teatro Clássico Japonês</h1>
                    <p class="teatro_text text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.</p>
            <picture>
                <source media="(max-width: 760px)" srcset="midia/teatro/home/home_300.jpg">
                <source media="(min-width: 760px)" srcset="midia/teatro/home/home_450.jpg">
                <img class="mx-auto d-block" src="midia/teatro/home/home_450.jpg" alt="Imagem 1" style="width:auto;">
            </picture>
                    <p class="teatro_text text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Aliquam dictum orci ante, at posuere tortor auctor eu. Etiam placerat ligula vel dolor ultrices, ac fringilla velit hendrerit.</p>
                <h2 class="subtitulo">Surgimento do Teatro no Japão</h2>
                    <p class="teatro_text text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Aliquam dictum orci ante, at posuere tortor auctor eu. Etiam placerat ligula vel dolor ultrices, ac fringilla velit hendrerit.</p>
                        <p class="teatro_text text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Aliquam dictum orci ante, at posuere tortor auctor eu. Etiam placerat ligula vel dolor ultrices, ac fringilla velit hendrerit.</p>
            </article>
        </div>


        <section class="row">
                <?php
                    $teatroValues = teatroContent();
                        foreach ($teatroValues as $teatroInfo){  ?>
                    <section class="col-12 col-md-6 col-xl-4 thumb_nail text-center">
                        <a href="index.php?pagina=<?=$teatroInfo["argumento"];?>&id=<?=$teatroInfo["id"];?>">    
                            <div class="circular">
                                <img class="thumb_img m-auto" src="midia/teatro/home/<?=$teatroInfo["imageSource"];?>.jpg" alt="random img">
                                    <div class="over_title">
                                        <h3 class="text-danger sub_cab"><?=$teatroInfo["title"];?></h3>
                                    </div>
                                    <div class="over_text">
                                        <p class="p_text">Lorem ipsum dolor sit amet, consectetur elit. Sed sit amet consequat tellus duis.</p>
                                    </div>
                            </div>
                        </a>
                    </section>
                <?php } ?>
        </section>
    </div>