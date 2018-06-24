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
		<p><?= $classico['texto'] ?></p>
	    </article>
        </div>
    </main>
	<section class="row text-center">
            <div class="line line_obras d-none"></div>
                <h2 class="subtitulo obras_sub_heading col-12">Outros Clássicos</h2>
		    <?php 
			foreach ($classicos as $maisClassicos) {
			    if($maisClassicos['titulo'] <> $classico['titulo'] ){
		    ?>
                        <section class="text-center float-left col-12 col-md-6 col-lg-3 section_atores">
                            <div class="line sub_line"></div>
                            <img class="img-fluid img_mais_obras d-block mx-auto" src="midia/teatro/<?=$maisClassicos['imagem']?>.jpg" alt="<?=$maisClassicos['alt']?>" title="<?=$maisClassicos['credito']?>" width="300" height="185">
                            <a href="index.php?pagina=classicos_internas&id=<?=$maisClassicos['id']?>"><h2 class="heading_atores"><?=$maisClassicos['titulo']?></h2></a>
                        </section>
		    <?php 
			    }
			} 
		    ?>
        </section>
    </div>
