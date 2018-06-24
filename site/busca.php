<?php
$busca = $_GET["busca"] ?? "";
$dadosBusca = !empty($busca) ? getDadosBusca($busca) : [];
?>
<section class="container">
    <div class="row">
        <div class="col-1">
            <h1 class="titulo text-center">Você buscou por: <?= $busca; ?></h1>
        </div>
    </div>
    <?php
        foreach ($dadosBusca as $namePage => $busca) {
            foreach ($busca as $test) {
    ?>
    
    <?php
            }
        }
    ?>
</section> 
