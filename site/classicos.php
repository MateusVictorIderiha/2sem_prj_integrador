<?php  
    $classicos = classicosInterna();
?>    
<div class="container teatro_content">
    <article>
        <h1 class="titulo text-center teatro_titulo_pos">Principais Expoentes</h1>
        <p class="text-left col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.</p>
	<div class="row text-center">
	    <div class="line line_obras"></div>
	    <h2 class="obras_sub_heading col-12">Obras Teatrais</h2>
		<?php 
		    foreach ($classicos as $dataPecas) {
			if($dataPecas["formato"] == "peca" ) {
		?>
		    <section class="col-12 col-sm-12 col-md-6 col-xl-3">
			<img class="pecas_img col-12" src="midia/teatro/<?= $dataPecas['imagem'] ?>.jpg" title="<?= $dataPecas['credito'] ?>" alt="<?= $dataPecas['alt'] ?>" width="300" height="185">
			<a class="obra_nome col-12" href="index.php?pagina=classicos_internas&id=<?= $dataPecas['id'] ?>"><h3 class="subtitulo"><?= $dataPecas['titulo'] ?></h3></a>                        
		    </section>
		<?php
			}
		    }
		?>
	</div>
	<div class="row text-center">
	    <div class="line line_obras"></div>
	    <h2 class="obras_sub_heading col-12">Filmes Influenciados</h2>
		<?php 
		    foreach ($classicos as $dataCinema) {
			if ($dataCinema["formato"] == "filme" ) {
		?>
		    <section class="col-12 col-sm-12 col-md-6 col-xl-3">
			<img class="pecas_img col-12" src="midia/teatro/<?= $dataCinema['imagem'] ?>.jpg" alt="<?= $dataCinema['alt'] ?>" width="300" height="185">
			<a class="obra_nome col-12" href="index.php?pagina=classicos_internas&id=<?= $dataCinema['id'] ?>"><h3 class="subtitulo"><?= $dataCinema['titulo'] ?></h3></a>                        
		    </section>
		<?php
			}
		    }
		?>
	</div>   
    </article>
</div>
