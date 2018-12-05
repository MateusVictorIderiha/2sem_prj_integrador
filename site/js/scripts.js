$(document).ready(function () {
// INICIO MENU
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

    $(".nav-target").click(function () {
        let posicaoTarget = parseInt($(this).data("target").offset().top);

        $("html, body").animate(
            { "scrollTop": posicaoTarget },
            1000
        );
    });

    let tema = (localStorage.getItem("myTemaSite") || 0) - 1;
    $(".changeTema").click(function () {
        tema++;
        let domHtml = document.getElementsByTagName("html")[0];
        if (tema === 1) {
            $("#changeTema").prop("href", "css/tema-escuro.css");
            domHtml.style.setProperty("--cor-primaria", "#000");
            domHtml.style.setProperty("--cor-secundaria", "#FFF");
            domHtml.style.setProperty("--hover-claro", "#bababa");
            domHtml.style.setProperty("--hover-escuro", "#3d3d3d");
            $(this).attr("title", "Trocar para tema claro");
            $(this).find("svg").removeClass("fa-sun, fa-moon, fa-adjust").addClass("fa-moon");
        } else if (tema === 2) {
            $("#changeTema").prop("href", "css/tema-escuro.css");
            domHtml.style.setProperty("--cor-primaria", "#FFF");
            domHtml.style.setProperty("--cor-secundaria", "#000");
            domHtml.style.setProperty("--hover-claro", "#3d3d3d");
            domHtml.style.setProperty("--hover-escuro", "#bababa");
            $(this).attr("title", "Trocar para tema original");
            $(this).find("svg").removeClass("fa-sun, fa-moon, fa-adjust").addClass("fa-sun");
        } else if (tema === 3) {            
            $("#changeTema").prop("href", "#");
            $(this).attr("title", "Trocar para tema escuro");
            $(this).find("svg").removeClass("fa-sun, fa-moon, fa-adjust").addClass("fa-adjust");
            tema = 0;
        }
        localStorage.setItem("myTemaSite", tema);
    }).click();

    let size = parseFloat(localStorage.getItem("sizeAtual") || 0);
    $("body").css({ "fontSize": size + "px" });
    $(".addTamanhoFonte").click(function () {
        let domBody = $(this).closest("body")[0];
        if (size === 0) {
            let size = parseFloat(window.getComputedStyle(domBody, null).getPropertyValue('font-size'));
        }
        let sizeAtual = size + 1;
        if (sizeAtual <= 36) {
            size = sizeAtual;
            localStorage.setItem("sizeAtual", sizeAtual);
            $(domBody).css({ "fontSize": sizeAtual + "px" });
        }
    });
    $(".tamanhoFonteOriginal").click(function () {
        let domBody = $(this).closest("body")[0];
        localStorage.setItem("sizeAtual", 13);
        size = 13;
        $(domBody).css({ "fontSize": 13 + "px" });
    });
    $(".diminuiTamanhoFonte").click(function () {
        let domBody = $(this).closest("body")[0];
        if (size === 0) {
            let size = parseFloat(window.getComputedStyle(domBody, null).getPropertyValue('font-size'));
        }
        let sizeAtual = size - 1;
        if (sizeAtual >= 8) {
            size = sizeAtual;
            localStorage.setItem("sizeAtual", sizeAtual);
            $(domBody).css({ "fontSize": sizeAtual + "px" });
        }
    });

    $(".nav-link.dropdown-toggle").click(function (event) {
        if (window.screen.width >= 991 && this.href !== "") {
            location.href = this.href;
        }
    });

    $(".nav-link.dropdown-toggle").on("keypress, keyup, keydown", function (event) {
        var keycode = event.which || event.keyCode || event.charCode;
        if (keycode === 40 || keycode === 13 || keycode === 38) {
            event.preventDefault();
            $(this).dropdown('toggle');
            $(this).siblings(".dropdown-menu").find(".dropdown-item:first-of-type()").focus();
        }
    });

    $(".navbar-toggler[data-target='#navbarSupportedContent']").click(function (e) {
        var targetMenu = $(this).data("target");
        if (!$(targetMenu).hasClass("show")) {
            $("#filter-overlay").addClass("show");
        } else {
            $("#filter-overlay").removeClass("show");
        }
    });

    $("#filter-overlay").click(function () {
        $(".navbar-collapse .navbar-toggler[data-target='#navbarSupportedContent']").trigger("click");
    });

    $(".mangas .manga").mouseover(function () {
        var img = $(this).find(".containerImg").find("img, object");
        var manga = $(this).closest(".manga");
        if ($(img).width() > $(manga).width() + 100) {
            $(this).find(".containerImg").addClass("doubleZoom");
        }
    });
// FIM MENU

    // INICIO FORM CONTATO
    $(".save-form").siblings(".msg").hide();
    $(".save-form").submit(function () {
        var dados = $(this).serialize();
        var thisForm = $(this);
        $.ajax({
            url: "save-msg.php",
            type: 'POST',
            data: dados,
            dataType: 'json',
            success: function (data) {
                let domMsg = $(thisForm).siblings(".msg");
                if (data.status === 1) {
                    $(domMsg).addClass("alert-success").removeClass("alert-danger").html(data.msg).show().focus();
                } else {
                    $(domMsg).addClass("alert-danger").removeClass("alert-success").html(data.msg).show().focus();
                }
                $(domMsg).focus();
            }
        });
        return false;
    });
    // FIM FORM CONTATOa
});
