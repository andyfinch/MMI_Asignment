<?php
/* Smarty version 3.1.33, created on 2019-11-13 17:14:36
  from 'C:\wamp64\www\MMI_Assignment\views\pages\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc39fc142912_91094026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b811f85df062ed1fc9b31e87289c6bc49e32623' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\content.tpl',
      1 => 1573665237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc39fc142912_91094026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159882175dcc39fc129c61_36249793', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6295336165dcc39fc1363b8_46418496', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_159882175dcc39fc129c61_36249793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_159882175dcc39fc129c61_36249793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\MMI_Assignment\\vendor\\smarty\\plugins\\function.buildTopicTree.php','function'=>'smarty_function_buildTopicTree',),));
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body content-tree">
                        <h5 class="card-title">My Content</h5>
                        <p class="card-text ">With supporting text below as a natural lead-in to additional content.</p>
                        <?php echo smarty_function_buildTopicTree(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</h6>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['topic']->value['content'];?>
</p>
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#topicModal">
                            Add Sub-Content
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "scripts"} */
class Block_6295336165dcc39fc1363b8_46418496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_6295336165dcc39fc1363b8_46418496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();

        $(function () {
            var modal = $('#contentModal');
            $(modal).find('#level').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
');
            $(modal).find('#parent_id').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
');
            $('#tree-' + '<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
').addClass('tree-active');

        });

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
