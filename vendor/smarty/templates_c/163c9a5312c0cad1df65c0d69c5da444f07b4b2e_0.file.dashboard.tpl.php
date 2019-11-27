<?php
/* Smarty version 3.1.33, created on 2019-11-27 15:57:47
  from 'C:\wamp64\www\MMI_Assignment\views\pages\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde9cfbb119d4_58547322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163c9a5312c0cad1df65c0d69c5da444f07b4b2e' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\dashboard.tpl',
      1 => 1574870267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/content_tree.tpl' => 1,
    'file:../components/content_modal.tpl' => 1,
  ),
),false)) {
function content_5dde9cfbb119d4_58547322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19697235865dde9cfbaefee7_06200131', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5647985565dde9cfbb08a15_23379487', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9204965245dde9cfbb0c956_81956112', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_19697235865dde9cfbaefee7_06200131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19697235865dde9cfbaefee7_06200131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\MMI_Assignment\\vendor\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php $_smarty_tpl->_subTemplateRender("file:../components/content_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Topic List</h5>
                        <p class="card-text">A list view of your topics</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Contents Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                                <tr>
                                    <td><a href="./index.php?p=content&id=<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['topic']->value['created'],"%d/%m/%Y %H:%M");?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['topic']->value['contentCount'];?>
</td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_5647985565dde9cfbb08a15_23379487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_5647985565dde9cfbb08a15_23379487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../components/content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_9204965245dde9cfbb0c956_81956112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_9204965245dde9cfbb0c956_81956112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();
        contentTree.init();
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <?php echo '<script'; ?>
>

            $(function () {
                var message = '<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
';
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
