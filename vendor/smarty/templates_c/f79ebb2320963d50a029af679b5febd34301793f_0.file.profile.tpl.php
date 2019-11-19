<?php
/* Smarty version 3.1.33, created on 2019-11-19 14:32:21
  from 'C:\wamp64\www\MMI_Assignment\views\pages\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd3fcf50a2ca6_86037506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f79ebb2320963d50a029af679b5febd34301793f' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\profile.tpl',
      1 => 1574173940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/content_modal.tpl' => 1,
  ),
),false)) {
function content_5dd3fcf50a2ca6_86037506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1828102455dd3fcf50773a9_21041644', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10677777415dd3fcf50969b1_25156173', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2521954755dd3fcf509c169_00314752', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1828102455dd3fcf50773a9_21041644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1828102455dd3fcf50773a9_21041644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row mt-5">


            <div class="col-md-4">

                <div data-toggle="modal" data-target="#imageModal"
                     class="card border-secondary" style="width: 18rem;">
                    <a href="#" title="Change Profile Picture">
                    <?php if ($_SESSION['user_data']['image_url'] != null) {?>
                        <img class="card-img-top"
                             src="./<?php echo $_SESSION['user_data']['image_url'];?>
"
                             alt="Card image cap">
                    <?php } else { ?>
                        <img class="card-img-top"
                             src="https://robohash.org/<?php echo $_SESSION['user_data']['full_name'];?>
?size=150x150"
                             alt="Card image cap">
                    <?php }?>

                    </a>



                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_SESSION['user_data']['full_name'];?>
</h5>
                        <p class="card-text"><?php echo $_SESSION['user_data']['user_name'];?>
</p>
                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <form id="form" class="needs-validation" novalidate="" action="index.php" method="post">
                    <input type="hidden" name="action" value="profile">

                    <!-- front content -->
                    <div class="card border-secondary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>User Profile</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="text-secondary" onclick="editForm();" href="#"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="userName">User Name </label>
                                <input disabled type="text" class="form-control"
                                       value="<?php echo $_SESSION['user_data']['user_name'];?>
">
                                <input type="hidden" class="form-control" id="userName" name="userName"
                                       value="<?php echo $_SESSION['user_data']['user_name'];?>
">
                                <div class="invalid-feedback">
                                    Please enter a valid user name.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email </label>
                                <input disabled type="email" class="form-control editable" name="email" id="email"
                                       value="<?php echo $_SESSION['user_data']['email'];?>
">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="fullName">Full name</label>
                                    <input disabled type="text" class="form-control editable" id="fullName"
                                           name="fullName"
                                           value="<?php echo $_SESSION['user_data']['full_name'];?>
" required="">
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="city">City</label>
                                <input disabled type="text" class="form-control editable" id="city" name="city"
                                       value="<?php echo $_SESSION['user_data']['city'];?>
" required="">
                                <div class="invalid-feedback">
                                    Please enter valid city.
                                </div>
                            </div>


                            <div class="modal-footer d-none">
                                <button type="submit" class="btn btn-primary">
                  <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                        aria-hidden="true"></span>
                                    Save
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form class="full-post" action="index.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="create">
                    <div class="container">
                        <div class="text-center">
                            <h2>Upload profile picture</h2>
                        </div>

                        <div class="row">

                                <input type="hidden" name="action" value="image_upload">
                            <div class="form-group">
                                <label for="upload">Select image to upload:</label>
                                <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
                            </div>                             

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" name="submit" class="btn btn-primary">Upload Image
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="submit" name="remove" class="btn btn-secondary">Remove image</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_10677777415dd3fcf50969b1_25156173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_10677777415dd3fcf50969b1_25156173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../components/content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_2521954755dd3fcf509c169_00314752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2521954755dd3fcf509c169_00314752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();

        function editForm() {


            $('#form input.editable').removeAttr('disabled');
            $('#form .modal-footer.d-none').removeClass('d-none')
        }

        function cancelEdit() {

            $('#form')[0].reset();
            $('#form input.editable').prop('disabled', true);
            $('#form .modal-footer').toggleClass('d-none')
        }


    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <?php echo '<script'; ?>
>

            $(function () {
                var message = '<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
';
                //$('.toast .toast-header .content').text(message);
                $('.toast .toast-body').text(message);
                $('.toast').toast('show');

            });
        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "scripts"} */
}
