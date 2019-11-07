<?php
/* Smarty version 3.1.33, created on 2019-11-07 15:59:23
  from 'C:\wamp64\www\MMI_Assignment\views\pages\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc43f5b9b4662_40301278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163c9a5312c0cad1df65c0d69c5da444f07b4b2e' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\dashboard.tpl',
      1 => 1573142358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc43f5b9b4662_40301278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13358848705dc43f5b9a89e3_52625696', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7729878655dc43f5b9b15a5_92085798', "modals");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_13358848705dc43f5b9a89e3_52625696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13358848705dc43f5b9a89e3_52625696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\MMI_Assignment\\vendor\\smarty\\plugins\\function.getTopics.php','function'=>'smarty_function_getTopics',),));
?>

<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Content</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <?php echo smarty_function_getTopics(array(),$_smarty_tpl);?>




                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Recent activity</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    <tr>
                        <td>Insertion Sort</td>
                        <td>01/01/2019 @ 19:00</td>
                    </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-primary">Go somewhereX</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_7729878655dc43f5b9b15a5_92085798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_7729878655dc43f5b9b15a5_92085798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="container">
                    <div class="text-center">
                        <h2>Topic</h2>
                        <p class="lead">Create a new topic</p>
                    </div>

                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <form class="needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label for="title">Title </label>
                                    <input type="text" class="form-control" id="title">
                                    <div class="invalid-feedback">
                                        Please enter a valid title.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description">Description </label>
                                    <input type="text" class="form-control" id="description">
                                    <div class="invalid-feedback">
                                        Please enter a valid title.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="category">Categorise </label>
                                    <input type="text" class="form-control" id="category">
                                    <!--todo change to dropdown-->
                                    <div class="invalid-feedback">
                                        Please enter a valid category.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="content">Content </label>
                                    <textarea rows="15" type="text" class="form-control" id="content"></textarea>
                                    <div class="invalid-feedback">
                                        Please enter valid content.
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "modals"} */
}
