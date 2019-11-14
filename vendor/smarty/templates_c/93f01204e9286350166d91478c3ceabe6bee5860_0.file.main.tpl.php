<?php
/* Smarty version 3.1.33, created on 2019-11-13 17:14:03
  from 'C:\wamp64\www\MMI_Assignment\views\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc39dbbb00a6_62717944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f01204e9286350166d91478c3ceabe6bee5860' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\layouts\\main.tpl',
      1 => 1573665237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcc39dbbb00a6_62717944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body class="background-gradient" cz-shortcut-listen="true">
<header class="container-fluid">
    <?php if (!$_GET['p'] || $_GET['p'] == 'login') {?>
        <nav class="navbar navbar-expand-lg navbar-light bg-lightx">
            <a class="navbar-brand" href="./index.php">
                <img src="./images/list-logo.png" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                RevisionIT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!--<a class="nav-link" href="./login.html">Sign in</a>-->
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#signinModal">
                            Sign in
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#signupModal">
                            Sign up
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <?php } else { ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-lightx">
            <a class="navbar-brand" href="./index.php">
                <img src="./images/list-logo.png" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                RevisionIT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="./index.php?p=dashboard" class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#topicModal">
                            Create Topic
                        </button>
                    </li>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4439334225dcc39dbba0b38_24152702', "leftlinks");
?>

                </ul>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8985691685dcc39dbba2dc6_41440254', "rightlinks");
?>

                                <a href="./index.php?p=profile"><img
                            src="https://robohash.org/<?php echo $_SESSION['user_data']['full_name'];?>
?size=50x50" class="user-profile fas fa-user-circle"/></a>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </nav>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20194435dcc39dbba7d34_62015885', "nav");
?>

</header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220286815dcc39dbba9e24_04815157', "body");
?>



<footer class="my-5 pt-5 text-muted text-center text-small" style="position: relative; bottom: 0; width: 100%">
    <div>
        <p class="mb-1">&copy; 2019 AJF Plc</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </div>
</footer>
<form id="contentModal" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="topic">
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
                                        <input type="text" class="form-control" id="title" name="title">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description">Description </label>
                                        <input type="text" class="form-control" id="description" name="description">
                                        <div class="invalid-feedback">
                                            Please enter a valid title.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category">Categorise </label>
                                        <input type="text" class="form-control" id="category" name="category">
                                        <!--todo change to dropdown-->
                                        <div class="invalid-feedback">
                                            Please enter a valid category.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content">Content </label>
                                        <textarea rows="10" type="text" class="form-control" id="content"
                                                  name="content"></textarea>
                                        <div class="invalid-feedback">
                                            Please enter valid content.
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" id="level" name="level" value="0">
                                    <input type="hidden" class="form-control" id="parent_id" name="parent_id" value="0">

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10353614855dcc39dbbac110_06126056', "modals");
?>




<div class="toast hide" data-autohide="true" data-delay="5000" data-animation="true"
     style="position: fixed; width: 500px; top: 10px; left: 50%;margin-left: -250px">
    <div class="toast-header">
        <strong class="mr-auto text-primary content">RevisionIT</strong>

        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Profile successfully updated
    </div>
</div>


<?php echo '<script'; ?>
 src="./bootstrap/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/bootstrap.bundle.js"><?php echo '</script'; ?>
><!--TODO-->
<?php echo '<script'; ?>
 src="./js/scripts.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11084888455dcc39dbbae228_54756249', "scripts");
?>

<!--<?php echo '<script'; ?>
 src="form-validation.js"><?php echo '</script'; ?>
>-->

</body>
</html>
<?php }
/* {block "leftlinks"} */
class Block_4439334225dcc39dbba0b38_24152702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftlinks' => 
  array (
    0 => 'Block_4439334225dcc39dbba0b38_24152702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leftlinks"} */
/* {block "rightlinks"} */
class Block_8985691685dcc39dbba2dc6_41440254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightlinks' => 
  array (
    0 => 'Block_8985691685dcc39dbba2dc6_41440254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "rightlinks"} */
/* {block "nav"} */
class Block_20194435dcc39dbba7d34_62015885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_20194435dcc39dbba7d34_62015885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_220286815dcc39dbba9e24_04815157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_220286815dcc39dbba9e24_04815157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_10353614855dcc39dbbac110_06126056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_10353614855dcc39dbbac110_06126056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_11084888455dcc39dbbae228_54756249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_11084888455dcc39dbbae228_54756249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}
