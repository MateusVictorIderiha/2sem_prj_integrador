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

    $(".nav-link.dropdown-toggle").click(function (event) {
        if (window.screen.width >= 991 && this.href !== "") {
            location.href = this.href;
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
    $(".save-form").submit(function () {
        var dados = $(this).serialize();
        var thisForm = $(this);
        $.ajax({
            "url": "save-msg.php",
            "data": dados,
            "dataType": "json",
            success: function (data) {
                if (data.status === 1) {
                    $(thisForm).siblings(".msg").addClass("alert-success").removeClass("alert-danger").html(data.msg).show().focus();
                } else {
                    $(thisForm).siblings(".msg").addClass("alert-danger").removeClass("alert-success").html(data.msg).show().focus();
                }
            }
        });
        return false;
    });
    // FIM FORM CONTATOa
});