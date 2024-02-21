$(document).ready(function () {


    const countryItems = document.querySelectorAll('.countries li');
    const countryPaths = document.querySelectorAll('.section--map__vector svg g path');

    function toggleActiveClass(countryClass, add) {
        countryPaths.forEach(countryPath => {
            if (countryPath.classList.contains(countryClass)) {
                if (add) {
                    countryPath.classList.add('active');
                } else {
                    countryPath.classList.remove('active');
                }
            }
        });
    }
    countryItems.forEach(countryItem => {
        const countryClass = countryItem.classList.value;
        countryItem.addEventListener('mouseenter', () => {
            toggleActiveClass(countryClass, true);
        });

        countryItem.addEventListener('mouseleave', () => {
            toggleActiveClass(countryClass, false);
        });
    });




    // Función para mostrar el contenido deseado
    $(function () {
        const showContent = (content, content_id) => {
            content.find(".payment-data").hide(300);
            content.find("#" + content_id).show(300);
        };

        $(document).on("change", "#my_select", function () {
            const selectedPayment = $(this).find("option:selected").data("payment");
            const content = $(this).closest(".select_tab").find("#my_content");
            showContent(content, selectedPayment);
        });

        var modal = document.getElementById('modalCountrie');
        if (modal) {
            modal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var countryCode = button.closest('li').classList[0];
                var select = document.getElementById('my_select');
                var options = select.options;

                for (var i = 0; i < options.length; i++) {
                    if (options[i].getAttribute('data-payment') === countryCode) {
                        options[i].selected = true;
                        $(select).trigger('change');
                        break;
                    }
                }
            });
        }
    });



    $('.video-trigger').click(function (e) {
        e.preventDefault();
        var videoSrc = $(this).attr('data-video');
        var videoContainer = $(this).next();
        $(this).hide();
        // check and add youtube parameters
        if (videoSrc.indexOf('?rel=0') >= 0) {
            videoContainer.find('iframe').attr('src', videoSrc + '&autoplay=1');
        } else {
            videoContainer.find('iframe').attr('src', videoSrc + '?rel=0&autoplay=1');
        }
    });


    $('body').on('click', '.video__button a', function () {
        var videoId = $(this).data('video-url');

        if (videoId.indexOf('https://www.youtube') >= 0) {
            var videoId = videoId.replace('/watch?v=', '/embed/');
            var videoUrl = videoId;
            $('#video-iframe').attr('src', videoUrl + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        } else if (videoId.indexOf('?') >= 0) {
            var videoId = videoId.replace('//vimeo.com/', '//player.vimeo.com/video/');
            var videoUrl = videoId;
            $('#video-iframe').attr('src', videoUrl + "&amp;autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        } else {
            var videoId = videoId.replace('//vimeo.com/', '//player.vimeo.com/video/');
            var videoUrl = videoId;
            $('#video-iframe').attr('src', videoUrl + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        }
    });

    $("#modalVideo").on("hide.bs.modal", function (e) {
        $('#video-iframe').attr('src', "");
    });

    const buttonCookies = document.getElementById('cookies');
    const boxCookies = document.querySelectorAll('.alert--cookies');

    if (buttonCookies) {
        buttonCookies.addEventListener('click', () => {
            boxCookies.forEach(box => {
                box.classList.add('ocult');
            });
        });
    }

    new ClipboardJS('.copiLynk').on('success', function (e) {
        var tooltipElement = e.trigger.getAttribute('data-bs-original-title');
        var successText = e.trigger.getAttribute('data-success-text');

        e.trigger.setAttribute('data-bs-original-title', successText);
        bootstrap.Tooltip.getInstance(e.trigger).show();
        bootstrap.Tooltip.getInstance(e.trigger).update(); // Ajusta la posición del tooltip

        setTimeout(function () {
            e.trigger.setAttribute('data-bs-original-title', tooltipElement);
            bootstrap.Tooltip.getInstance(e.trigger).hide();
        }, 2000); // Cambia el tiempo de visualización aquí (en milisegundos)
    });


    // Inicializa los tooltips de Bootstrap
    var tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    if (tooltips.length > 0) {
        var options = {
            delay: {
                show: 200,
                hide: 1000 // Cambia el tiempo de ocultamiento aquí (en milisegundos)
            }
        };
        var instances = new bootstrap.Tooltip(tooltips[0], options);
    }


    document.getElementById("contrast").addEventListener("click", function() {
        document.body.classList.toggle("contrast");
    });

    //Refres AOS
    AOS.refresh();
});

