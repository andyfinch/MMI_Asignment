<?php
/* Smarty version 3.1.33, created on 2019-11-27 18:02:26
  from 'C:\wamp64\www\MMI_Assignment\views\pages\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddeba32e2ffd8_36317953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b811f85df062ed1fc9b31e87289c6bc49e32623' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\content.tpl',
      1 => 1574877743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/content_tree.tpl' => 1,
    'file:../components/content_modal.tpl' => 1,
  ),
),false)) {
function content_5ddeba32e2ffd8_36317953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20078011565ddeba32dd2a30_63801041', "leftlinks");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7875248755ddeba32dd56e7_08644497', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2292130365ddeba32e1a3a4_61405082', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12160825205ddeba32e1e731_07397743', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "leftlinks"} */
class Block_20078011565ddeba32dd2a30_63801041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftlinks' => 
  array (
    0 => 'Block_20078011565ddeba32dd2a30_63801041',
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
class Block_7875248755ddeba32dd56e7_08644497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7875248755ddeba32dd56e7_08644497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-fluid" data-spy="scroll" data-target="#spy">
        <div class="row">
            <div class="col-sm-4 col-lg-3">
                <?php $_smarty_tpl->_subTemplateRender("file:../components/content_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>


            <div class="col-sm-8 col-lg-9 ">

                <?php $_smarty_tpl->_assignInScope('root_topic_level', $_smarty_tpl->tpl_vars['contentTopics']->value[0]['level']);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentTopics']->value, 'topic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
?>
                    <div style="padding-left: <?php echo $_smarty_tpl->tpl_vars['topic']->value['level']-$_smarty_tpl->tpl_vars['root_topic_level']->value;?>
%">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-auto mr-auto">
                                        <h5 class="card-title title"><?php echo $_smarty_tpl->tpl_vars['topic']->value['title'];?>
</h5>
                                        <?php if ($_smarty_tpl->tpl_vars['topic']->value['description'] != null) {?>
                                            <h6 class="card-title description"><?php echo $_smarty_tpl->tpl_vars['topic']->value['description'];?>
</h6>
                                        <?php }?>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Content" data-toggle="modal"
                                                       data-header="Add content to topic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-controller="content"
                                                       data-topic_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       class="fas fa-file"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Add Sub Topic" data-toggle="modal"
                                                       data-controller="topic"
                                                       data-header="Create new subtopic"
                                                       data-target="#topicModal" data-action="create"
                                                       data-level="<?php echo $_smarty_tpl->tpl_vars['topic']->value['level']+1;?>
" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       class="fas fa-folder-plus"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Edit Topic" data-toggle="modal" data-target="#topicModal"
                                                       data-controller="topic"
                                                       data-header="Edit Topic"
                                                       data-action="edit" data-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       data-level="<?php echo $_smarty_tpl->tpl_vars['topic']->value['level'];?>
" data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['parent_id'];?>
"
                                                       class="fas fa-edit"></i>
                                                </a></li>
                                            <li class="list-group-item"><a class="text-secondary" href="#">
                                                    <i title="Delete Topic" data-toggle="modal"
                                                       data-target="#deleteModal"
                                                       data-header="Delete Topic"
                                                       data-id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                       data-parent_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['pa'];?>
"
                                                       data-controller="topic"
                                                       class="fas fa-trash-alt"></i>
                                                </a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topic']->value['contents'], 'contents');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contents']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['contents']->value['content'] != null || $_smarty_tpl->tpl_vars['contents']->value['images'] != null || $_smarty_tpl->tpl_vars['contents']->value['videos'] != null) {?>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col card-text content"
                                                 style="font-family: inherit"><?php echo $_smarty_tpl->tpl_vars['contents']->value['content'];?>

                                            </div>

                                            <div class="col-auto ml-auto">
                                                <ul class="list-group list-group-horizontal">

                                                    <li class="list-group-item"><a class="text-secondary" href="#">
                                                            <i title="Edit Content" data-toggle="modal"
                                                               data-target="#topicModal" data-controller="content"
                                                               data-header="Edit Content"
                                                               data-action="edit"
                                                               data-topic_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                               data-id="<?php echo $_smarty_tpl->tpl_vars['contents']->value['id'];?>
"
                                                               class="fas fa-edit"></i>
                                                        </a></li>
                                                    <li class="list-group-item"><a class="text-secondary" href="#">
                                                            <i title="Delete Content" data-toggle="modal"
                                                               data-target="#deleteModal"
                                                               data-header="Delete Content"
                                                               data-controller="content"
                                                               data-topic_id="<?php echo $_smarty_tpl->tpl_vars['topic']->value['id'];?>
"
                                                               data-id="<?php echo $_smarty_tpl->tpl_vars['contents']->value['id'];?>
"
                                                               data-action="delete"
                                                               class="fas fa-trash-alt"></i>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="owl-carousel image-carousel">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                                                        <img width="250" height="250" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
"
                                                             alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['url'];?>
"/>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>


                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value['videos'], 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                                            <div class="row mt-5">
                                                <div class="col">
                                                    <iframe width="560" height="315"
                                                            src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
"
                                                            frameborder="0"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen></iframe>
                                                    
                                                </div>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </div>
                                    <hr>
                                <?php }?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
        </div>
    </div>
    <form id="deleteFormModal" class="needs-validation" novalidate="" method="post" action="index.php">


        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <input type="hidden" id="controller" name="controller" value="topic">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="topic_id" name="topic_id">
                    <input type="hidden" id="parent_id" name="parent_id">

                    <div class="modal-body">
                        <input id="function" type="hidden" name="function" value="delete">
                        <div class="container">
                            <div class="text-center">
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
class Block_2292130365ddeba32e1a3a4_61405082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_2292130365ddeba32e1a3a4_61405082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../components/content_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_12160825205ddeba32e1e731_07397743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_12160825205ddeba32e1e731_07397743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        postAjax.init();
        contentTree.init();

        function enableCarousel() {
            $('.for-owl-carousel').addClass('owl-carousel');

            $('.owl-carousel').owlCarousel({
                stagePadding: 30,
                loop: false,
                margin: 10,
                responsiveClass: true,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    }
                }
            });
        }

        $(function () {

            $('.owl-carousel.image-carousel').owlCarousel({
                items: 1,
                merge: false,
                loop: false,
                margin: 10,
                video: false,
                lazyLoad: true,
                center: false,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                }
            });

            $('.owl-carousel.video-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                video: true,
                lazyLoad: true,
                center: true,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 4
                    }
                }
            });

            $('#carouselLink').on('click', function (event) {
                console.log('ff');
                if ($(this).text().indexOf('Enable') > -1) {
                    $(this).text('Disable Carousel View');
                    $('.for-owl-carousel').addClass('owl-carousel');

                    $('.owl-carousel').owlCarousel({
                        stagePadding: 0,
                        autoWidth: false,
                        loop: false,
                        margin: 0,
                        responsiveClass: true,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true
                            }
                        }
                    });
                } else {
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
            $(modal).find('#controller').val(button.data('controller'));
            $(modal).find('#id').val(button.data('id'));
            $(modal).find('#topic_id').val(button.data('topic_id'));
            $(modal).find('.header').text(button.data('header'));

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
