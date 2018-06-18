<?php
    $pecas = pecasContent();
    $cinema = cinemaContent();
?>    
<div class="container teatro_content">
        <h1 class="titulo text-center teatro_titulo_pos">Obras e Influenciados</h1>
            <p class="text-left col-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero, vitae dignissim nisl euismod et. Donec est risus, posuere quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet consequat tellus. Duis congue fermentum libero.</p>
            <div class="row text-center">
		    <div class="line line_obras"></div>
			<h2 class="obras_sub_heading col-12">Peças Clássicas</h2>
		<?php 
		    foreach ($pecas as $dataPecas) {
		?>
		    <section class="col-12 col-sm-12 col-md-6 col-xl-3">
			<img class="pecas_img col-12" src="midia/teatro/<?= $dataPecas['imageSource'] ?>.jpg" title="<?= $dataPecas['credito'] ?>" alt="<?= $dataPecas['alt'] ?>" width="300" height="185">
			<a class="obra_nome col-12" href="index.php?pagina=classicos_internas&id=<?= $dataPecas['id'] ?>"><?= $dataPecas['titulo'] ?></a>                        
		    </section>
		<?php
		    }
		?>
            </div>
            <div class="row text-center">
                <div class="line line_obras"></div>
		    <h2 class="obras_sub_heading col-12">Obras Influenciadas</h2>
		<?php 
		    foreach ($cinema as $dataCinema) {
		?>
		    <section class="col-12 col-sm-12 col-md-6 col-xl-3">
			<img class="pecas_img col-12" src="midia/teatro/<?= $dataCinema['imageSource'] ?>.jpg" alt="<?= $dataCinema['alt'] ?>" width="300" height="185">
                        <a class="obra_nome col-12" href="index.php?pagina=classicos_internas&id=<?= $dataCinema['id'] ?>"><?= $dataCinema['titulo'] ?></a>                        
                    </section>
		<?php
		    }
		?>
            </div>            
    </div>
