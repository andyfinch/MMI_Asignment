<form id="contentModal" class="needs-validation" novalidate="" enctype="multipart/form-data" method="post"
      action="index.php">


    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <input id="controller" type="hidden" name="controller" value="topic">
                    <input id="function" type="hidden" name="function" value="create">
                    <div class="container">
                        <div class="text-center">
                            <p class="lead header">Create a new topic</p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 order-md-1">
                                <form class="needs-validation" novalidate="">

                                    <div class="mb-3 title toggleable">
                                        <label for="title">Title </label>
                                        <input type="text" class="form-control" id="title" name="title">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3 description toggleable">
                                        <label for="description">Description </label>
                                        <input type="text" class="form-control" id="description" name="description">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3 categories toggleable">
                                        <label for="category">Categorise </label>
                                        <input type="text" class="form-control" id="category" name="category">
                                        <!--todo change to dropdown-->
                                        <div class="invalid-feedback">
                                            Please enter a valid category.
                                        </div>
                                    </div>

                                    <div class="mb-3 contents toggleable">
                                        <div class="content" >
                                            <textarea rows="10" type="text" class="form-control" id="content"
                                                      name="content"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter valid content.
                                            </div>
                                        </div>
                                        <div class="content mt-3">
                                            <div class="form-group">
                                                <label for="fileToUpload">Select image to upload:</label>
                                                <input type="file" multiple class="form-control-file"
                                                       name="fileToUpload[]"
                                                       id="fileToUpload">
                                            </div>
                                        </div>
                                        <div class="content mt-3">
                                            <div class="form-group">
                                                <label for="upload">Add Video links:</label>
                                                <div class="input-group videoGroup">
                                                    <input placeholder="URL for YouTube Embedded video" type="text" class="video form-control" name="video[]">
                                                    <div class="input-group-append ml-2">
                                                    <a id="videoAdd" href="#"><i class="fas fa-plus input-group-text"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="id" name="id">
                                    <input type="hidden" id="level" name="level" value="0">
                                    <input type="hidden" id="parent_id" name="parent_id" value="0">
                                    <input type="hidden" id="topic_id" name="topic_id" value="0">
                                    <input type="hidden" id="content_id" name="content_id" value="0">

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" class="btn btn-primary">Create
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>

    /*$('#contentType').on('change', function (event) {
        $('.content').hide();
        $('.content[data-content-type=' + this.value + ']').show();

    });*/
    $('#videoAdd').on('click', function (event) {

       $('.videoGroup').last().after('<input placeholder="URL for YouTube Embedded video" type="text" class="video form-control videoGroup" name="video[]">')



    });

    $('#content').trumbowyg({
        btns: [['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['fontsize'],
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen'],
            ['foreColor', 'backColor'],
            ['base64']
        ]
    });
    $('#contentModal').on('show.bs.modal', function (event) {

        var modal = $(this).find('.modal-content');
        $(modal).closest('form')[0].reset();
        $('#content', modal).trumbowyg('empty');
        $(modal).find('#level').val(0);
        $(modal).find('#parent_id').val(0);
        $(modal).find('#function').val('create');
        $(modal).find('.header').text('Create a new topic');
        $(modal).find('#topic_id').val(0);
        $(modal).find('.toggleable').show();

        var button = $(event.relatedTarget);
        var action = button.data('action');

        if (button.data('controller')) {
            $(modal).find('#controller').val(button.data('controller'));

            if (button.data('controller') === 'topic' && button.data('action') !== 'create') {
                $(modal).find('.contents').hide();
            } else if (button.data('controller') === 'content') {
                $(modal).find('.title, .description, .categories').hide();
            }
        }

        /*if (button.data('content_id')) {
            $(modal).find('#content_id').val(button.data('content_id'));
        }*/

        if (button.data('topic_id')) {
            $(modal).find('#topic_id').val(button.data('topic_id'));
        }

        if (button.data('header')) {
            $(modal).find('.header').text(button.data('header'));
        }

        if (button.data('id')) {
            $(modal).find('#id').val(button.data('id'));
        }

        if (button.data('level')) {
            $(modal).find('#level').val(button.data('level'));
        }

        if (button.data('parent_id')) {
            $(modal).find('#parent_id').val(button.data('parent_id'));
        }

        if (action === 'edit') {
            $(modal).find('#title').val($(button).closest('div.card').find('.card-header .card-title.title').text());
            console.log(1);
            $(modal).find('#description').val($(button).closest('div.card').find('.card-header .card-title.description').text());

            if (button.data('controller') === 'topic') {
                $(modal).find('#content').trumbowyg('html', $(button).closest('div.card').find('.card-body .content').html());
            }
            else if (button.data('controller') === 'content') {
                $(modal).find('#content').trumbowyg('html', $(button).closest('div.card-body').find('.card-text').html());
            }


            $(modal).find('#function').val('edit');
            $(modal).find('#submit').text('Edit');
        }


    })
</script>
