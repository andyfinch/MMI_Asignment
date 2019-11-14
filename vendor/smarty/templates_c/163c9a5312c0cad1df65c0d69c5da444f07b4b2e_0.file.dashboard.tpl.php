<?php
/* Smarty version 3.1.33, created on 2019-11-14 15:18:31
  from 'C:\wamp64\www\MMI_Assignment\views\pages\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd7047770b16_96951816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163c9a5312c0cad1df65c0d69c5da444f07b4b2e' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\dashboard.tpl',
      1 => 1573744710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd7047770b16_96951816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7885645665dcd7047749122_43155923', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1650118295dcd7047767471_82042955', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18917679875dcd704776a4a9_00219072', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_7885645665dcd7047749122_43155923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7885645665dcd7047749122_43155923',
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
                        <!--<?php echo smarty_function_buildTopicTree(array(),$_smarty_tpl);?>
-->
                        <ul class="list-group">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                            <li class="list-group-item topic-level-<?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
" id="tree-<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"><a href="./index.php?p=content&id=<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</a></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Content</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
            <div class="col-sm-3">
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
    </div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_1650118295dcd7047767471_82042955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1650118295dcd7047767471_82042955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_18917679875dcd704776a4a9_00219072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_18917679875dcd704776a4a9_00219072',
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
