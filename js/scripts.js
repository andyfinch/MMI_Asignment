/* Signup form */
var postAjax = {
    request: null,
    
    init: function () {
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
            //var serializedData = $form.serialize();
            var fd = new FormData($form[0]);


            // Let's disable the inputs for the duration of the Ajax request.
            // Note: we disable elements AFTER the form data has been serialized.
            // Disabled form elements will not be serialized.
            //$inputs.prop("disabled", true);

            // Fire off the request to /form.php
            this.request = $.ajax({
                url: "index.php",
                type: "post",
                data: fd,
                cache: false,
                contentType: false,
                processData: false
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


var contentTree = {

    init: function () {
        contentTree.bind();
    },
    bind: function () {
        $(".content-tree i.fas").on("click", function () {
            //$(this).toggleClass('fa-plus').toggleClass('fa-minus');
            var collapsing = $(this).hasClass('fa-minus');
            if ( collapsing)
            {
                $(this).removeClass('fa-minus').addClass('fa-plus');
            }
            else
            {
                $(this).removeClass('fa-plus').addClass('fa-minus');
            }

            //$(this)
            var currentParent = parseInt($(this).closest('li').attr('data-parent-id'));
            var nextLis = $(this).closest('li').nextAll();
            var visible = $(nextLis.get(0)).is(':visible');
            var level = $(nextLis.get(0)).attr('data-level');

            for (const nextLi of nextLis) {
               
                if (parseInt($(nextLi).attr('data-parent-id')) > currentParent) {

                    if ( collapsing)
                    {
                        if ($(nextLi).attr('data-level') - level === 0) {
                            $(nextLi).hide();
                            if (!$(nextLi).hasClass('hidden-directly'))
                            {
                                $(nextLi).addClass('hidden-directly');
                            }

                        }
                        else if ($(nextLi).attr('data-level') - level > 0) {
                            $(nextLi).hide();

                            
                            if (!$(nextLi).hasClass('hidden-directly')) {
                                $(nextLi).addClass('hidden-indirectly');
                            }
                            if (!$(nextLi).hasClass('hidden-indirectly')) {
                                $(nextLi).addClass('hidden-directly');
                            }
                            


                        }
                    }
                    else
                    {
                        if ($(nextLi).attr('data-level') - level === 0) {
                            $(nextLi).show();
                            $(nextLi).removeClass('hidden-directly').removeClass('hidden-indirectly');
                        }
                        if ($(nextLi).attr('data-level') - level > 0) {
                            if ($(nextLi).hasClass('hidden-indirectly'))
                            {
                                $(nextLi).show();
                                $(nextLi).removeClass('hidden-indirectly');
                            }
                            
                        }
                    }



                    /*if ($(nextLi).hasClass('hidden-by-parent') )
                    {
                        $(nextLi).show();
                        $(nextLi).removeClass('hidden-by-parent');
                    }
                    else if (visible) {
                        $(nextLi).hide();
                        $(nextLi).addClass('hidden-by-parent')
                    } else {
                        if ($(nextLi).attr('data-level') === level) {
                            $(nextLi).show();

                        }

                    }*/


                } else {
                    break;
                }
            }
            //console.log(($(this).closest('li').nextAll()));
        });
    }
};
