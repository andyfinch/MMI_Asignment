<?php
/* Smarty version 3.1.33, created on 2019-11-18 14:09:05
  from 'C:\wamp64\www\MMI_Assignment\views\components\content_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd2a601761668_75901893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26498276816593f55f4662efbfa753fb3dd036a7' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\components\\content_tree.tpl',
      1 => 1574086099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd2a601761668_75901893 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <div class="card-body content-tree">
        <h5 class="card-title">My Content Tree</h5>
        <p class="card-text ">A hierarchical view of your content</p>
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                <li data-parent-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['parent_id'];?>
"  style="margin-left: <?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
vw" class="list-group-item parent-id-<?php echo $_smarty_tpl->tpl_vars['topic']->value['parent_id'];?>
" id="tree-<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"><a
                            href="./index.php?p=content&id=<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a><span class="tree-x" style="display: inline-block; width: 90%">click</span></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<?php }
}
