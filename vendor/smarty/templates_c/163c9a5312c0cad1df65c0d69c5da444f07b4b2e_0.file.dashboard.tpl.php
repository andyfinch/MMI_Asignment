<?php
/* Smarty version 3.1.33, created on 2019-11-12 09:54:19
  from 'C:\wamp64\www\MMI_Assignment\views\pages\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dca814b6cea27_15047351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163c9a5312c0cad1df65c0d69c5da444f07b4b2e' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\dashboard.tpl',
      1 => 1573552452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dca814b6cea27_15047351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11767862595dca814b6b5b13_43241025', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_643376605dca814b6c7950_43564623', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3639087285dca814b6c9e76_82962792', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_11767862595dca814b6b5b13_43241025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11767862595dca814b6b5b13_43241025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\MMI_Assignment\\vendor\\smarty\\plugins\\function.buildTopicTree.php','function'=>'smarty_function_buildTopicTree',),));
?>

<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Content</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <?php echo smarty_function_buildTopicTree(array(),$_smarty_tpl);?>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['topic']->value['created'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
                                


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
class Block_643376605dca814b6c7950_43564623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_643376605dca814b6c7950_43564623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_3639087285dca814b6c9e76_82962792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_3639087285dca814b6c9e76_82962792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();

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
    <?php }?>

<?php
}
}
/* {/block "scripts"} */
}
