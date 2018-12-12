<?php
$classicos = classicosInterna();
$page_id = $_GET["id"];
$classico = getIdArray($page_id, $classicos);
?>
<div class="container teatro_content">
    <main class="bio_content">
        <h1 class="titulo text-center"><?= $classico['titulo'] ?></h1>
        <div class="row mt-5">
            <aside class="col-12 col-lg-4">
                <div class="line line_perfil d-md-none"></div>
                <img class="d-block mx-auto img-fluid" src="midia/teatro/<?= $classico['imagem'] ?>.jpg" alt="<?= $classico['alt'] ?>" title="<?= $classico['credito'] ?>">
                <div class="line line_perfil d-md-none"></div>
            </aside>
            <article class="text-justify text-md-left col-12 col-lg-8" id="conteudo_principal">
                <p><?= $classico['texto'] ?></p>
            </article>
        </div>
    </main>
            <div class="buttons text-center">
                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                <!-- Your share button code -->
                <?php 
                $url = urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
                ?>
                <a class="btn btn-lg" href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>" target="_blank"><i class="fab fa-facebook-f"></i> Compartilhar </a>
                <a class="d-none d-md-inline btn btn-lg" href="https://api.whatsapp.com/send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="d-md-none btn btn-lg" href="whatsapp://send?text=<?= $url; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Compartilhar</a>
                <a class="btn btn-lg" href="http://www.twitter.com/share?url=<?= $url; ?>" target="_blank"><i class="fab fa-twitter"></i>Compartilhar</a>
            </div>
    <section class="row text-center">
        <div class="line line_obras d-none"></div>
        <h2 class="subtitulo obras_sub_heading col-12">Mais Clássicos</h2>
        <?php
        foreach ($classicos as $maisClassicos) {
            if ($maisClassicos['titulo'] <> $classico['titulo']) {
                ?>
                <section class="text-center float-left col-12 col-md-6 col-lg-3 section_atores">
                    <div class="line sub_line"></div>
                    <img class="img-fluid img_mais_obras d-block mx-auto" src="midia/teatro/<?= $maisClassicos['imagem'] ?>.jpg" alt="<?= $maisClassicos['alt'] ?>" title="<?= $maisClassicos['credito'] ?>" width="300" height="185">
                    <a href="index.php?pagina=classicos_internas&id=<?= $maisClassicos['id'] ?>"><h2 class="heading_atores"><?= $maisClassicos['titulo'] ?></h2></a>
                </section>
                <?php
            }
        }
        ?>
    </section>
    <section class="row mb-4 mt-4">
        <?php include 'sidebar-busca.php'; ?>
    </section>
</div>
