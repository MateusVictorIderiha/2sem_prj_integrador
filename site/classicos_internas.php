<?php   
    $classicos = classicosInterna();
    $page_id = $_GET["id"];
    $classico = getIdArray( $page_id, $classicos);
?>
    <div class="container teatro_content">
    <main class="bio_content">
        <h1 class="titulo text-center"><?= $classico['titulo'] ?></h1>
        <div class="row">
            <aside class="col-12 col-lg-4 bio_aside_margin">
                    <div class="line line_perfil d-md-none"></div>
                        <img class="d-block mx-auto img-fluid cla_aside_img" src="midia/teatro/<?= $classico['imagem'] ?>.jpg" alt="<?= $classico['alt'] ?>" title="<?= $classico['credito'] ?>">
                    <div class="line line_perfil d-md-none"></div>
            </aside>
	    <article class="bio_article_margin text-justify text-md-left col-12 col-lg-8">
		<p><?= $classico['textoUm'] ?></p>
		<p><?= $classico['textoDois'] ?></p>
	    </article>
        </div>
    </main> 
    </div>
