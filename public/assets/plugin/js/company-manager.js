$(document).ready(function () {

    (function ($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function (value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "Escribe la respuesta correcta");

        // validate companyForm form
        $(function () {
            $('#companyForm').validate({
                rules: {
                    company: {
                        required: true,
                    }
                },
                messages: {
                    company: {
                        required: "Por favor, introduce la empresa"
                    }
                },
            })
        })

    })(jQuery)
})
