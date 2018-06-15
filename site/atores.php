    <div class="container teatro_content">
        <h1 class="teatro_heading titulo">Grandes Atores</h1>
            <div class="row justify-content-center">

                <?php
                    $atoresValues = atoresContent();
                    foreach ($atoresValues as $atoresInfo) {
                ?>
                    <section class="col-12 col-md-6 col-xl-4 border border-danger content_border">
                        <div class="row">
                            <div class="left_content text-center col-6">
                                <img clas="img_atores" src="midia/teatro/atores/<?= $atoresInfo["imageSource"] ?>.jpg" width="150" height="200">
                            </div>
                            <div class="right_content col-6">
                                <h2 class="subtitulo hDoisNome"><?= $atoresInfo["titulo"] ?></h2>
                                <div class="line lineAtor"></div>
                                <p class="descriPara text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et mi viverra, aliquam nunc non, facilisis magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                <div class="line lineAtor"></div>                    
                                <a class="leiaMais" href="index.php?pagina=<?= $atoresInfo["argumento"] ?>">Leia Mais..</a>
                            </div>
                        </div>
                    </section>
                <?php } ?>

            </div>
    </div>