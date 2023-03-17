$(document).ready(function() {
    const load = Window;
    const formulario = $("form");
    const inputs = $("#formulario input,textarea");

    const expresiones = {
        name: /^[a-zA-ZÁ-ÿ\s]{1,40}$/, // letras y espacios, pueden llevar acentos 
        gmail: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.]+$/,
        subject: /^[a-zA-ZÁ-ÿ\s]/, // letras y espacios, pueden llevar acentos 
        message: /^[a-zA-ZÁ-ÿ\s]/ // letras y espacios, pueden llevar acentos 
    };
    const campos = {
        name: false,
        gmail: false,
        subject: false,
        message: false
    }

    function validarCampo(buscador, identificado) {
        switch (identificado) {
            case "name":
                if (expresiones.name.test(buscador)) {
                    $("form #container-input input").removeClass('warning-form');
                    campos[identificado] = true;
                } else {
                    $("form #container-input input").addClass('warning-form');
                    campos[identificado] = false;
                }
                break;
            case "gmail":
                if (expresiones.gmail.test(buscador)) {
                    $("form #container-input input").removeClass('warning-form');
                    campos[identificado] = true;

                } else {
                    $("form #container-input input").addClass('warning-form');
                    campos[identificado] = false;
                }
                break;
            case "subject":
                if (expresiones.subject.test(buscador)) {
                    $("form #container-input input").removeClass('warning-form');
                    campos[identificado] = true;
                } else {
                    $("form #container-input input").addClass('warning-form');
                    campos[identificado] = false;
                }
                break;
            case "message":
                if (expresiones.message.test(buscador)) {
                    $("form #container-input textarea").removeClass('warning-form');
                    campos[identificado] = true;
                } else {
                    $("form #container-input textarea").addClass('warning-form');
                    campos[identificado] = false;
                }
                break;
        }
    }
    $(inputs).keyup(function(e) {
        const buscar = $(this).val();
        const identificador = $(this).attr('name');
        validarCampo(buscar, identificador)
        $("form").removeClass('active-validatsion');

    });
    $(inputs).blur(function(e) {
        const buscar = $(this).val();
        const identificador = $(this).attr('name');
        validarCampo(buscar, identificador)
    });



    function validarCamposInput() {
        const nombres = {
            name: $("#name"),
            gmail: $("#gmail"),
            subject: $("#subject"),
            message: $("#message")
        }

        if (campos.name == false) {
            $(nombres.name).addClass('active-validation');
            setTimeout(function() {
                $(nombres.name).removeClass('active-validation');
            }, 1000);

        }
        if (campos.gmail == false) {
            $(nombres.gmail).addClass('active-validation');
            setTimeout(function() {
                $(nombres.gmail).removeClass('active-validation');
            }, 1000);


        }
        if (campos.subject == false) {
            $(nombres.subject).addClass('active-validation');
            setTimeout(function() {
                $(nombres.subject).removeClass('active-validation');
            }, 1000);


        }
        if (campos.message == false) {
            $(nombres.message).addClass('active-validation');
            setTimeout(function() {
                $(nombres.message).removeClass('active-validation');
            }, 1000);
        }



    }
    $("form").submit(function(e) {
        if (campos.name == true && campos.gmail == true && campos.subject == true && campos.message == true) {
            $(".alert").addClass("active-alert");
            if (Window.reload) {
                $(".alert").removeClass("active-alert");
            }
        } else if (campos.name == false && campos.gmail == false && campos.subject == false & campos.message == false) {
            e.preventDefault();
            let error = [];
            $("form").addClass('active-validation');
            setTimeout(function() {
                $("form").removeClass('active-validation');
            }, 1000);

        } else if (campos.name == false || campos.gmail == false || campos.subject == false || campos.message == false) {
            e.preventDefault()
            validarCamposInput()

        }
    });
});