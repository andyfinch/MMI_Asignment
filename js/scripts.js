/* Signup form */
var postAjax = {
    request: null,
    
    init: function (test) {
        postAjax.bind();
    },
    bind: function() {
        $("form:not('.full-post')").submit(function (event) {

            // Prevent default posting of form - put here to work in case of errors
            event.preventDefault();

            $('.signupSpinner').toggleClass('d-none');

            // Abort any pending request
            if (this.request) {
                this.request.abort();
            }
            // setup some local variables
            var $form = $(this);

            // Let's select and cache all the fields
            var $inputs = $form.find("input, select, button, textarea");

            // Serialize the data in the form
            var serializedData = $form.serialize();

            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            //$inputs.prop("disabled", true);

            // Fire off the request to /form.php
            this.request = $.ajax({
                url: "index.php",
                type: "post",
                data: serializedData
            });

            // Callback handler that will be called on success
            this.request.done(function (response, textStatus, jqXHR) {
                // Log a message to the console

                $('.errorMessage').remove();
                $('.errorHighlight').removeClass('errorHighlight');
                //alert(response);
                if ( response !== '')
                {
                    let jsonResponse = JSON.parse(response);
                    let errors = jsonResponse.fieldsInError;
                    console.log(errors);
                    if (errors.length > 0) {
                        for (const error of errors) {
                            $('input[name=' + error.name + ']').addClass('errorHighlight');
                            if (error.message) {
                                $('input[name=' + error.name + ']').after("<div class='errorMessage'>" + error.message + "</div>");
                            }


                            console.log(error);
                        }
                    } else {
                        console.log(jsonResponse.successMessage);
                        console.log(jsonResponse.redirectPage);
                        if (jsonResponse.redirectPage != null)
                        {
                            document.location.href = "./index.php?p=" + jsonResponse.redirectPage + "";
                        }

                    }
                }



                //$('#signupModal .modal-content').replaceWith($('#signupModal .modal-content', response));

            });

            // Callback handler that will be called on failure
            this.request.fail(function (jqXHR, textStatus, errorThrown) {
                // Log the error to the console
                console.error(
                    "The following error occurred: " +
                    textStatus, errorThrown
                );
            });

            // Callback handler that will be called regardless
            // if the request failed or succeeded
            this.request.always(function () {
                // Reenable the inputs
                $inputs.prop("disabled", false);
                $('.signupSpinner').toggleClass('d-none');
            });

        });
    }
};
