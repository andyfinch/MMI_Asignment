<?php
/* Smarty version 3.1.33, created on 2019-11-26 13:59:53
  from 'C:\wamp64\www\MMI_Assignment\views\components\content_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd2fd97df076_23065034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e23fc07df5c15af2f1d067dee021a12e4b83e69' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\components\\content_modal.tpl',
      1 => 1574776792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd2fd97df076_23065034 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="contentModal" class="needs-validation" novalidate="" enctype="multipart/form-data" method="post" action="index.php">
    <input type="hidden" name="action" value="topic">

    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="create">
                    <div class="container">
                        <div class="text-center">
                            <h2>Topic</h2>
                            <p class="lead header">Create a new topic</p>
                        </div>

                        <div class="row">
                            <div class="col-md-12 order-md-1">
                                <form class="needs-validation" novalidate="">

                                    <div class="mb-3">
                                        <label for="title">Title </label>
                                        <input type="text" class="form-control" id="title" name="title">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Description </label>
                                        <input type="text" class="form-control" id="description" name="description">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category">Categorise </label>
                                        <input type="text" class="form-control" id="category" name="category">
                                        <!--todo change to dropdown-->
                                        <div class="invalid-feedback">
                                            Please enter a valid category.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="contentType">Content Type </label>
                                        <select name="contentType" id="contentType" class="form-control">
                                            <option value="1" selected="selected">Text</option>
                                            <option value="2">Images</option>
                                            <option value="3">Video</option>
                                            <option value="4">Map</option>
                                        </select>
                                                                                <div class="content" data-content-type="1">
                                            <textarea rows="10" type="text" class="form-control" id="content"
                                                      name="content"></textarea>
                                            <div class="invalid-feedback">
                                                Please enter valid content.
                                            </div>
                                        </div>
                                        <div style="display: none" class="content mt-3" data-content-type="2">
                                            <div class="form-group">
                                                <label for="upload">Select image to upload:</label>
                                                <input type="file" multiple class="form-control-file" name="fileToUpload[]"
                                                       id="fileToUpload">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="id" name="id">
                                    <input type="hidden" id="level" name="level" value="0">
                                    <input type="hidden" id="parent_id" name="parent_id" value="0">

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

<?php echo '<script'; ?>
>

    $('#contentType').on('change', function (event) {
        $('.content').hide();
        $('.content[data-content-type=' + this.value + ']').show();

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

        console.log('ere');
        var modal = $(this).find('.modal-content');
        $(modal).closest('form')[0].reset();
        $('#content', modal).trumbowyg('empty');
        $(modal).find('#level').val(0);
        $(modal).find('#parent_id').val(0);
        $(modal).find('#function').val('create');
        $(modal).find('.header').text('Create a new topic');

        var button = $(event.relatedTarget);
        var action = button.data('action');

        console.log($(button).closest('div.card').find('.card-header .card-title').text());

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
            $(modal).find('#title').val($(button).closest('div.card').find('.card-header .card-title').text());
            $(modal).find('#description').val($(button).closest('div.card').find('.card-body .card-title').text());
            $(modal).find('#content').trumbowyg('html', $(button).closest('div.card').find('.card-body .content').html());
            $(modal).find('#function').val('edit');
            $(modal).find('#submit').text('Edit');
        }


    })
<?php echo '</script'; ?>
>
<?php }
}
