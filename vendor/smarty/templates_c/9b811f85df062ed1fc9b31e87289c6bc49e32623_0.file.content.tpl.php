<?php
/* Smarty version 3.1.33, created on 2019-11-14 11:59:46
  from 'C:\wamp64\www\MMI_Assignment\views\pages\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd41b2cf0bf0_26771001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b811f85df062ed1fc9b31e87289c6bc49e32623' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\content.tpl',
      1 => 1573732773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd41b2cf0bf0_26771001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13577905945dcd41b2ca0276_61936996', "body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7106130955dcd41b2cda7d7_62965720', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_13577905945dcd41b2ca0276_61936996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13577905945dcd41b2ca0276_61936996',
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                <div class="card mb-1 topic-level-<?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="text-secondary" href="#">
                                    <i data-toggle="modal" data-target="#topicModal" data-action="edit" data-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
" data-description="<?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['topic']->value['content'];?>
" data-level="<?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['parent_id'];?>
" class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                        <!--<h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</h5>
                        <div class="col-md-6 text-right">
                            <a class="text-secondary" onclick="editForm();" href="#"><i class="fas fa-edit"></i></a>
                        </div>-->
                    </div>
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</h6>
                        <p class="card-text"><pre style="font-family: inherit"><?php echo $_smarty_tpl->tpl_vars['topic']->value['content'];?>
</pre></p>
                        <button class="btn btn-primary" onclick="setIds('<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
', '<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
')" type="submit" data-toggle="modal" data-target="#topicModal">
                            Add Sub-Content
                        </button>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "scripts"} */
class Block_7106130955dcd41b2cda7d7_62965720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_7106130955dcd41b2cda7d7_62965720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();

        function setIds(level, parent)
        {
            var modal = $('#contentModal');
            $(modal).find('#level').val(level);
            $(modal).find('#parent_id').val(parent);
        }

        /*function populateModal(title, description, content, level, parent)
        {
            var modal = $('#contentModal');
            $(modal).find('#title').val(title);
            $(modal).find('#description').val(description);
            $(modal).find('#content').val(content);
            $(modal).find('#level').val(level);
            $(modal).find('#parent_id').val(parent);
        }*/

        $(function () {
            var modal = $('#contentModal');
            $(modal).find('#level').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
');
            $(modal).find('#parent_id').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
');
            $('#tree-' + '<?php echo $_smarty_tpl->tpl_vars['topics']->value[0]['id'];?>
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
