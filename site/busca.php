<?php
$busca = $_GET["busca"] ?? "";
$dadosBusca = !empty($busca) ? getDadosBusca($busca) : [];
?>
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="titulo text-center">VocÃª buscou por: <?= $busca; ?></h1>
        </div>
    </div>
    <div class="row">
        <?php include 'sidebar-busca.php'; ?>
    </div>
    <hr class="hrDanca" />
    <?php
        foreach ($dadosBusca as $namePage => $buscasGroup) {
            foreach ($buscasGroup as $result) {
    ?>
    <section class="row mb-5 mt-5">
        <div class="col-12">
            <div class="w-80">
                <a href="index.php?pagina=<?= $namePage."&id=".($result["id"] ?? ""); ?>">
                    <h2 class="subtitulo text-center"><?= $result["titulo"] ?? ""; ?></h2>
                </a>
                <p class="text-center"><?= $result["subtitulo"] ?? ""; ?></p>
                <p class="text-justify"><?= $result["texto"] ?? ""; ?></p>
            </div>
        </div>
    </section>
    <hr class="hrDanca" />
    <?php
            }
        }
    ?>
</section> 
