$(document).ready(function () {

    (function ($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function (value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "Escribe la respuesta correcta");

        // validate contactForm form
        $(function () {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    last_name: {
                        required: true,
                    },
                    company: {
                        required: true,
                    },
                    organization_title: {
                        required: true,
                    },
                    phone_number: {
                        required: true,
                        maxlength: 10,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    interest: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Por favor, introduce tu nombre"
                    },
                    last_name: {
                        required: "Por favor, introduce tu apellido"
                    },
                    company: {
                        required: "Por favor, introduce la empresa"
                    },
                    organization_title: {
                        required: "Por favor, introduce tu puesto"
                    },
                    phone_number: {
                        required: "Por favor, introduce tu número",
                        maxlength: "No es un número válido",
                        minlength: "Introduce 10 dígitos",
                    },
                    email: {
                        required: "Por favor, introduce un correo"
                    },
                    interest: {
                        required: "Por favor, introduce tu interés o necesidad"
                    }
                },
            })
        })

    })(jQuery)
})
