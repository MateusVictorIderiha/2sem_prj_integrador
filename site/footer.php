    <footer>
        <div class="row">
            <img class="col-1 simu_logo" src="midia/footer/50_50.png" alt="simulação de logo" height="50" width="50" />
        <nav class="col-10">
            <div class="row">
                <?php
                
                $itensMenu = getValuesMenu();
                foreach ($itensMenu as $item) {
                     if(isset($item["subMenu"])) {
                ?>
                <ul class="col-2">
                    <li class="foot_li_title"> <a href="#"></a> <?= $item["nome"]; ?> </li>
                    <?php
                        foreach ($item["subMenu"] as $subItem) { ?>
                    <li class=" foot_li"> <a href="#"></a><?= $subItem["nome"]; ?></li>
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
            <h3 class="direito">Direitos Reservados</h3>
        </div>
    </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
