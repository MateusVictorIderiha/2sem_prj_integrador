    <div class="container teatro_content">
        <div class="row">
            <article class="col-12">
                <h1 class="titulo text-center teatro_titulo_pos">Teatro Clássico Japonês</h1>
                    <p class="teatro_paragrafo text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero. Integer at purus diam. Quisque efficitur nulla eu semper luctus. Sed euismod felis et auctor euismod. Nullam gravida ornare arcu. Vestibulum tempus aliquet nunc, nec efficitur sapien rutrum a. Phasellus a leo id elit malesuada congue. Etiam at turpis eu nunc vestibulum molestie. Etiam lacinia nisl vel mauris pretium semper. In iaculis nunc ipsum, nec vestibulum risus accumsan quis. Vestibulum lacinia rhoncus tellus. Sed ut consequat est. </p>
            <picture>
                <source media="(max-width: 760px)" srcset="midia/teatro/home_300.jpg">
                <source media="(min-width: 760px)" srcset="midia/teatro/home_450.jpg">
                <img class="teatro_home_img mx-auto d-block" src="midia/teatro/home_450.jpg" alt="Encenação de uma peça de Noh" title="???? [CC BY-SA 3.0 (https://creativecommons.org/licenses/by-sa/3.0)], via Wikimedia Commons">
            </picture>
                    <p class="teatro_paragrafo text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Aliquam dictum orci ante, at posuere tortor auctor eu. Etiam placerat ligula vel dolor ultrices, ac fringilla velit hendrerit.  Duis congue lacinia magna eget imperdiet. Maecenas vehicula ultrices consequat. Duis quam nibh, euismod sollicitudin nisi ac, blandit aliquet massa. Vestibulum diam massa, gravida eu ullamcorper a, imperdiet id dolor. Suspendisse vitae urna dolor. Donec placerat dui in diam sagittis euismod. Curabitur sit amet arcu semper orci vestibulum pulvinar et vitae neque. Quisque fermentum semper augue. Nam efficitur sapien vel condimentum facilisis. Proin id nulla nec purus iaculis dictum vitae eget enim. Etiam convallis lorem ipsum, sit amet imperdiet ante faucibus at. Mauris molestie augue nec ex ultrices viverra. </p>
                <h2 class="subtitulo text-center">Surgimento do Teatro no Japão</h2>
                    <p class="teatro_paragrafo text-justify text-sm-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis consequat nec, tempor in magna. Vivamus dapibus lacus ut elementum mollis. Morbi bibendum lorem ut nulla facilisis hendrerit. Cras commodo congue feugiat. Maecenas feugiat risus sit amet augue tristique malesuada euismod eu sapien. Aliquam dictum orci ante, at posuere tortor auctor eu. Etiam placerat ligula vel dolor ultrices, ac fringilla velit hendrerit.  Proin in lacus nec sem semper convallis non nec velit. Suspendisse blandit nisi nec velit congue, nec tincidunt lorem feugiat. Nullam iaculis sem sit amet odio rhoncus consectetur. Proin vestibulum, ex sit amet eleifend ultricies, tellus leo convallis mauris, sit amet facilisis lorem nibh et orci. Cras porttitor auctor malesuada. Nulla molestie nisl a erat posuere, quis egestas nisi semper. In sollicitudin posuere velit porttitor accumsan. Etiam a tincidunt ipsum. Sed sem magna, interdum sit amet tempor vehicula, viverra et erat. Nunc molestie ornare tellus at ullamcorper. Vivamus id ipsum et mi finibus porta. Nullam ornare molestie auctor. Phasellus eu sagittis purus. Phasellus et magna at dolor convallis finibus. </p>
            </article>
        </div>
        <section class="row">
                <?php
                    $teatroValues = teatroContent();
                        foreach ($teatroValues as $teatroInfo){  ?>
                    <section class="col-12 col-md-6 col-lg-4 thumb_nail text-center">
                        <a href="index.php?pagina=<?=$teatroInfo["argumento"];?>&id=<?=$teatroInfo["id"];?>">    
                            <div class="circular">
                                <img class="thumb_img m-auto" src="midia/teatro/<?=$teatroInfo["imageSource"];?>.jpg" alt="<?= $teatroInfo["alt"] ?? ""; ?>" title="<?=$teatroInfo["credito"];?>">
                                    <div class="over_title">
                                        <h3 class="text-danger sub_cab"><?=$teatroInfo["title"];?></h3>
                                    </div>
                                    <div class="over_text">
                                        <p class="p_text"><?=$teatroInfo["texto"];?></p>
                                    </div>
                            </div>
                        </a>
                    </section>
                <?php } ?>
        </section>
    </div>