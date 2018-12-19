/* TOGGLE PARA EL MENU RESPONSIVE Y MENU DE USUARIO */
$(document).ready(function () {
    $(".toggle").click(function () {
        $("#mainNav .menu").slideToggle(400, function () {
            $(this).toggleClass("mobile");
            $(this).css("display", "");
        });
    });
    /* Función para cerrar el menú si se hace click afuera del mismo */
    $(document).click(function (event) {
        if (!$(event.target).closest(".menu,.toggle").length) {
            $("body").find(".menu").addClass("mobile");
        }
    });

    $(".toggleUserMenu").click(function () {
        $("#mainNav .userMenu").fadeToggle(200, function () {
            $(this).toggleClass("mobile");
            $(this).css("display", "");
        });
    });
    /* Función para cerrar el menú si se hace click afuera del mismo */
    $(document).click(function (event) {
        if (!$(event.target).closest(".userMenu,.toggleUserMenu").length) {
            $("body").find(".userMenu").addClass("mobile");
        }
    });

    /* Función para abrir el menu CATEGORIAS */
    $(".toggleCategoriesMenu").click(function () {
        $(".categoriesMenu").fadeToggle(200, function () {
            $(this).toggleClass("mobile");
            $(this).css("display", "");
        });
    });
    /* Función para cerrar el menú si se hace click afuera del mismo */
    // $(document).click(function (event) {
    //     if (!$(event.target).closest(".categoriesMenu,.toggleCategoriesMenu").length) {
    //         $("body").find(".categoriesMenu").addClass("mobile");
    //     }
    // });
});

/* SETTINGS PARA EL SLIDER PRINCIPAL DEL HOME */

$(document).ready(function() {
    $('.slider').slick({
        arrows: false,
        dots: true,
        autoplay: true
    });
});

$(document).ready(function() {
    setTimeout(function () {
        $('.slider-producto').slick({
            arrows: false,
            dots: true,
            autoplay: false,
            infinite: false
        });
    }, 300);
});

/* SETTINGS PARA EL SLIDER DE PRODUCTOS DESEADOS */
$(document).ready(function () {
    $(".deseados-slider").slick({
        infinite: true,
        arrows: true,
        dots: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
        },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2
                }
        },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3
                }
        }
      ]
    });
});

/* Modal para el buscador */
$('#search').click(function(){
    $('#search-modal').show();
});
$('#close').click(function(){
    $('#search-modal').hide();
});

/* Aviso para actualizar cantidad del carrito */
$(function(){
    var href = '';
    $('#quantity').change(function(){
        href = $('#submit').attr('href');
        $('#submit').attr('href', 'javascript:void(0)');
    });
    $('#submit').click(function(){
        if($(this).attr('href') == 'javascript:void(0)') {
            var question = window.confirm('No ha actualizado la cantidad de items en su carrito, ¿desea continuar de todas formas?');
            if (question) {
                window.location.href = href;
            }
        }
    });
});
