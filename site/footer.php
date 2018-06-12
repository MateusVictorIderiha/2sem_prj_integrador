<?php
$infoGrupo = getInfoGrupo();

$integrantes = [];
foreach ($infoGrupo["integrantes"] as $integrante) {
    $integrantes[] = "<a href='index.php?pagina=quem_somos#".formatName($integrante["nome"])
            ."' title='Integrante do grupo ".$infoGrupo["nome_grupo"]." com as funcões de: ".$integrante["funcoes"]."'>"
            .$integrante["nome"]."</a>";
}
?>
        <footer class="rodape border-line-top">
            <div class="row">
                <div class="col-12 col-lg-1">
                    <img class="simu_logo" src="midia/geral/<?= $infoGrupo["logo"]; ?>" alt="Logo <?= $infoGrupo["nome_grupo"]; ?>" />
                </div>
                <nav class="col-10">
                    <div class="row">
                        <?php
                        $itensMenu = getValuesMenu();
                        foreach ($itensMenu as $item) {
                             if(isset($item["subMenu"])) {
                        ?>
                        <ul class="col-2 d-none d-lg-block">
                            <li class="foot_li_title"> <a href="#"></a> <?= $item["nome"]; ?> </li>
                            <?php
                                foreach ($item["subMenu"] as $subItem) { 
                            ?>
                            <li class="foot_li"> <a href="#"></a><?= $subItem["nome"]; ?></li>
                            <?php } ?>
                        </ul>
                        <?php
                             }
                        }
                        ?>
                    </div>
                </nav>
            </div>
            <div class="row">
                <h3 class="direito">Copyright <?= $infoGrupo["nome_grupo"].". ".implode(", ", $integrantes)."." ?></h3>
            </div>
        </footer>

        <div id="filter-overlay"></div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
//                INICIO MENU
                $(".nav-item").mouseover(function () {
                    if (window.screen.width >= 991) {
                        var currentNav = this;
                        $(".nav-item").each(function (i, domNavItem) {
                            if (domNavItem !== currentNav) {
                                $(domNavItem).removeClass("show");
                                $(domNavItem).find(".dropdown-menu").removeClass("show");
                                $(domNavItem).find(".nav-link.dropdown-toggle").attr("aria-expanded", false);
                            }
                        });
                        $(this).find(".nav-link.dropdown-toggle").attr("aria-expanded", true);
                    }
                });

                $(".nav-item").click(function(event) {
                    if (window.screen.width >= 991) {
                        location.href = this.href;
                    }
                });

                $(".navbar-toggler[data-target='#navbarSupportedContent']").click(function(e) {
                    var targetMenu = $(this).data("target");
                    if(!$(targetMenu).hasClass("show")) {
                        $("#filter-overlay").addClass("show");
                    } else {
                        $("#filter-overlay").removeClass("show");
                    }
                });

                $("#filter-overlay").click(function() {
                    $(".navbar-collapse .navbar-toggler[data-target='#navbarSupportedContent']").trigger("click");
                });
//                FIM MENU

//                INICIO FORM CONTATO

//                FIM FORM CONTATO
            });
        </script>
    </body>
</html>
