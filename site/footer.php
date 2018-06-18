<?php
$infoGrupo = getInfoGrupo();

$integrantes = [];
foreach ($infoGrupo["integrantes"] as $integrante) {
    $integrantes[] = "<a href='index.php?pagina=quem_somos#".formatName($integrante["nome"])
            ."' title='Integrante do grupo ".$infoGrupo["nome_grupo"]." com as funcões de: ".$integrante["funcoes"]."'>"
            .$integrante["nome"]."</a>";
}
?>

    <hr class="hrDanca">
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
                            $id = isset($item["id"]) ? "&id=".$item["id"] : "";
                            if(isset($item["subMenu"])) {
                        ?>
                        <ul class="col-2 d-none d-lg-block">
                            <li class="foot_li_title"> <a href="<?= "index.php?pagina=".$item["link"].$id; ?>"> <?= $item["nome"]; ?> </a></li>
                            <?php
                                foreach ($item["subMenu"] as $subItem) { 
                            ?>
                            <li class="foot_li"> <a href="<?= "index.php?pagina=".$item["link"].$id; ?>"> <?= $subItem["nome"]; ?> </a></li>
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

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

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

                $(".nav-link.dropdown-toggle").click(function(event) {
                    if (window.screen.width >= 991 && this.href !== "") {
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
                
                $(".mangas .manga").mouseover(function() {
                    var img = $(this).find(".containerImg").find("img, object");
                    var manga = $(this).closest(".manga");
                    if($(img).width() > $(manga).width() + 100) {
                        $(this).find(".containerImg").addClass("doubleZoom");
                    }
                });
//                FIM MENU

//                INICIO FORM CONTATO
                
//                FIM FORM CONTATO
            });
        </script>
    </body>
</html>
