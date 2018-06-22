<?php
$manga = getDadosManga();
$textoLista = explode("\n", $manga["texto"]);
$texto = "<p class='text-justify'>".implode("</p><p class='text-justify'>", $textoLista)."</p>";
$img = $manga["imagem"];

$mangasAll = getDadosMangas();
$mangasCat = getMangasCat($mangasAll, $manga["categoria"]);

if (count($mangasCat) > 3) {
    $mangasRelacionados = array_rand($mangasCat, 3);
} else {
    $mangasRelacionados = array_keys($mangasCat);    
}
?>
<div class="container">
    <main class="row">
        <article class="col-12 col-md-9 contentManga <?= "layoutManga".$manga["layout"]; ?>">
            <div class="float-md-left text-center imgManga">
                <a href="<?= $img["credito"] ?>" title="<?= $img["title"]; ?>" class="creditos" target="_blank">
                    <?php if ($img["ext"] == ".svg") { ?>
                        <object width="523" type="image/svg+xml" data="<?= "midia/manga/".$img["nome"].$img["ext"]; ?>" title="<?= $img["alt"].". ".$img["title"]; ?>">
                            <img src="<?= "midia/manga/".$img["nome"].$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                        </object>
                    <?php } else { ?>
<!--                    <picture class="">
                        <source media="(max-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_220".$img["ext"]; ?>">
                        <source media="(min-width: 960px)" srcset="<?= "midia/manga/".$img["nome"]."_439".$img["ext"]; ?>">-->
                        <img src="<?= "midia/manga/".$img["nome"]."_439".$img["ext"]; ?>" title="<?= $img["title"]; ?>" alt="<?= $img["alt"]; ?>" class="mw-100">
                    <!--</picture>-->
                    <?php } ?>
                </a>
            </div>
            <header class="titulosManga">
                <h1 class="titulo text-center"><?= $manga["titulo"]; ?></h1>
                <p class="subtitulo text-center"><?= $manga["subtitulo"]; ?></p>
            </header>
            <div class="orderTexto">
                <?= $texto; ?>
            </div>
            <div class="buttons">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <!-- Your share button code -->
                <?php 
                $url = urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
                ?>
                <a class="btn btn-lg" href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>" target="_blank">
                    <i class="fab fa-facebook-f"></i> Compartilhar
                </a>
                <a class="d-none d-md-block btn btn-lg" href="https://api.whatsapp.com/send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="d-md-none btn btn-lg" href="whatsapp://send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
            </div>
        </article>
        <aside class="col-12 col-md-3 pl-5 relacionados">
            <h2 class="subtitulo text-center">Materias Relacionadas</h2>
            <?php
            foreach ($mangasRelacionados as $indice) {
                $mangaRelacionado = $mangasCat[$indice];
                $textoRelacionado = substr($mangaRelacionado["texto"], 0, 175);
            ?>
                <section class="manga">
                    <a href="index.php?pagina=manga&id=<?= $mangaRelacionado["id"]; ?>" class=""><h3 class="subtitulo text-center"><?= $mangaRelacionado["titulo"]; ?></h3></a>
                    <div class="containerImg text-center">
                        <a href="index.php?pagina=manga&id=<?= $mangaRelacionado["id"]; ?>" class="creditos">
                            <?= $mangaRelacionado["subtitulo"]; ?>
                        </a>
                    </div>
                </section>
            <?php } ?>
        </aside>
    </main>
    <section class="row mb-4 mt-4">
        <form class="form-inline formBusca col-12" action="index.php">
            <input type="hidden" name="pagina" value="busca">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Busca" aria-label="Username" aria-describedby="basic-addon1" name="busca">
                <button class="input-group-prepend" type="submit">
                    <span class="" id="basic-addon1"><i class="fas fa-search"></i></span>
                </button>
            </div>
        </form>
    </section>
    <section class="row">
        <h2 class="subtitulo text-center col-12">Top 3</h2>
        <section class="col-md-4">
            
        </section>
    </section>
</div>
