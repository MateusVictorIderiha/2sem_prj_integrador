<?php
$musicas = getMusica();
$id = $_GET["id"];
$musica = getIdArray($id, $musicas);
?>
<div class="container p-2">
    <div class="row">
        <div class="col-md-4">
 
            <article id="conteudo_principal">
                <h1 class="text-center titulo"><?= $musica["titulo"]; ?></h1>
                <picture>
                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" .$musica["imagem"]; ?>">
                    <img class="img-fluid img-thumbnail" src="<?= "midia/musicas/" .$musica["imagem"]; ?>" alt="<?= $musica["alt"]; ?>">
                </picture>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
                <p class="text-justify"><?= $musica["texto"]; ?>...</p>
                                <div class="buttons text-center">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <!-- Your share button code -->
                <?php 
                $url = urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
                ?>
                <a class="btn btn-lg" aria-label="compartilhe no facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>" target="_blank"><i class="fab fa-facebook-f"></i> Compartilhar </a>
                <a class="d-none d-md-inline btn btn-lg" href="https://api.whatsapp.com/send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="d-md-none btn btn-lg" aria-label="compartilhe no whatsapp" href="whatsapp://send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="btn btn-lg" aria-label="compartilhe no twitter" href="http://www.twitter.com/share?url=<?= $url; ?>" target="_blank"><i class="fab fa-twitter"></i>Compartilhar</a>
                </div>
            </article>
        </div>
        <div class="col-md-8">
            <!--PARTE EXTRA-->
            <h2 class="text-center subtitulo"><?= $musica["extra"]["tituloExtra"]; ?></h2>
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($musica["extra"]["sectionExtra"] as $valor) { ?>
                        <div class="col-md-6  HiddenText-345">
                            <section>
                                <h2 class="text-center subtitulo"><?= $valor["titulo"]; ?></h2>
                              <?php if (isset($valor["imagem"])){ ?>
                                <picture>
                                    <source media="(max-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 720px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <source media="(min-width: 1200px)" srcset="<?= "midia/musicas/" . $valor["imagem"]; ?>">
                                    <img class="img-fluid img-thumbnail rounded-circle m-2 float-left" style="width: 175px; height: 175px" src="<?= "midia/musicas/" . $valor["imagem"]; ?>" alt="imagem de uma banda de j-pop denominada de ...">
                                </picture>
                               <?php } ?>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                                <p class="text-justify"><?= substr($valor["texto"], 0, 225); ?>...</p>
                            </section>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <section class="row mb-4 mt-4">
        <?php include 'sidebar-busca.php'; ?>
    </section>
</div>
