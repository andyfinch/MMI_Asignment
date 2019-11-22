<?php
/* Smarty version 3.1.33, created on 2019-11-21 12:17:02
  from 'C:\wamp64\www\MMI_Assignment\views\pages\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6803eaf81f7_14035130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b811f85df062ed1fc9b31e87289c6bc49e32623' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\content.tpl',
      1 => 1574338618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/content_tree.tpl' => 1,
    'file:../components/content_modal.tpl' => 1,
  ),
),false)) {
function content_5dd6803eaf81f7_14035130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2757014335dd6803ea7b3d5_97675909', "leftlinks");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18433328875dd6803ea7f2e8_29237602', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13116839695dd6803eaddc21_79583932', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13202596975dd6803eae3858_38290031', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "leftlinks"} */
class Block_2757014335dd6803ea7b3d5_97675909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftlinks' => 
  array (
    0 => 'Block_2757014335dd6803ea7b3d5_97675909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li class="nav-item">
    <a href="#" id="carouselLink" class="nav-link">
        Enable Carousel View
    </a>
</li>
<?php
}
}
/* {/block "leftlinks"} */
/* {block "body"} */
class Block_18433328875dd6803ea7f2e8_29237602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18433328875dd6803ea7f2e8_29237602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-lg-3">
                <?php $_smarty_tpl->_subTemplateRender("file:../components/content_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>


            <div class="col-sm-8 col-lg-9 ">

                <?php $_smarty_tpl->_assignInScope('root_topic_level', $_smarty_tpl->tpl_vars['contentTopics']->value[0]['level']);?>
                <?php $_smarty_tpl->_assignInScope('previousParent', 0);?>
                <?php $_smarty_tpl->_assignInScope('index', 0);?>
                <?php $_smarty_tpl->_assignInScope('inGroup', false);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['previousParent']->value != $_smarty_tpl->tpl_vars['topic']->value['parent_id']) {?>
                    <?php $_smarty_tpl->_assignInScope('previousParent', $_smarty_tpl->tpl_vars['topic']->value['parent_id']);?>
                    <?php $_smarty_tpl->_assignInScope('inGroup', true);?>
                    <div class="for-owl-carousel">
                    <?php }?>

                    <div style="padding-left: <?php echo $_smarty_tpl->tpl_vars['topic']->value['level']-$_smarty_tpl->tpl_vars['root_topic_level']->value;?>
%">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</h5>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i data-toggle="modal" data-header="Create new subtopic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-level="<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       class="fas fa-folder-plus"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i data-toggle="modal" data-target="#topicModal"
                                                       data-header="Edit Topic"
                                                       data-action="edit" data-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       data-level="<?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['parent_id'];?>
"
                                                       class="fas fa-edit"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i data-toggle="modal" data-target="#deleteModal"
                                                       data-header="Delete Topic"
                                                       data-action="delete" data-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['pa'];?>
"
                                                       class="fas fa-trash-alt"></i>
                                                </a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['topic']->value['description'] != null || $_smarty_tpl->tpl_vars['topic']->value['content'] != null) {?>
                                <div class="card-body">
                                    <?php if ($_smarty_tpl->tpl_vars['topic']->value['description'] != null) {?>
                                        <h6 class="card-title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</h6>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['topic']->value['content'] != null) {?>
                                        <div class="card-text content"
                                             style="font-family: inherit"><?php echo $_smarty_tpl->tpl_vars['topic']->value['content'];?>
</div>
                                    <?php }?>


                                </div>
                            <?php }?>
                        </div>
                    </div>

                        <?php if ($_smarty_tpl->tpl_vars['topic']->value['parent_id'] != $_smarty_tpl->tpl_vars['contentTopics']->value[$_smarty_tpl->tpl_vars['index']->value+1]['parent_id'] && $_smarty_tpl->tpl_vars['inGroup']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('inGroup', false);?>
                    </div>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </div>

<form id="deleteFormModal" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="topic">

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <input type="hidden" id="id" name="id">
                <input type="hidden" id="parent_id" name="parent_id">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="delete">
                    <div class="container">
                        <div class="text-center">
                            <h2>Topic</h2>
                            <p class="lead header">Delete topic</p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" class="btn btn-primary">Delete
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_13116839695dd6803eaddc21_79583932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_13116839695dd6803eaddc21_79583932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../components/content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_13202596975dd6803eae3858_38290031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_13202596975dd6803eae3858_38290031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();
        contentTree.init();
        function enableCarousel()
        {
            $('.for-owl-carousel').addClass('owl-carousel');

            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop: false,
                margin: 10,
                responsiveClass: true,
                nav:true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    }
                }
            });
        }

        $(function () {

            $('#carouselLink').on('click', function (event) {
                console.log('ff');
                if ($(this).text().indexOf('Enable') > -1)
                {
                    $(this).text('Disable Carousel View');
                    $('.for-owl-carousel').addClass('owl-carousel');

                    $('.owl-carousel').owlCarousel({
                        stagePadding: 0,
                        autoWidth: false,
                        loop: false,
                        margin: 0,
                        responsiveClass: true,
                        nav:true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true
                            }
                        }
                    });
                }
                else
                {
                    $(this).text('Enable Carousel View');
                    var owl = $('.owl-carousel');
                    owl.owlCarousel();
                    owl.trigger('destroy.owl.carousel');
                    $('.for-owl-carousel').removeClass('owl-carousel');
                }


            });

            var modal = $('#contentModal');
            $(modal).find('#level').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
');
            $(modal).find('#parent_id').val('<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
');
            $('#tree-' + '<?php echo $_smarty_tpl->tpl_vars['contentTopics']->value[0]['id'];?>
').addClass('tree-active');

        });

        $('#deleteModal').on('show.bs.modal', function (event) {

            var modal = $(this).find('.modal-content');
            var button = $(event.relatedTarget);
            $(modal).find('#id').val(button.data('id'));

        })

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
