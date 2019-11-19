<?php
/* Smarty version 3.1.33, created on 2019-11-19 15:00:03
  from 'C:\wamp64\www\MMI_Assignment\views\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd4037342e643_74006755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f01204e9286350166d91478c3ceabe6bee5860' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\layouts\\main.tpl',
      1 => 1574175601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd4037342e643_74006755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./vendor/trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="./vendor/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">
    <link rel="stylesheet" href="./vendor/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="background-gradient" cz-shortcut-listen="true">
<header class="container-fluid">
    <?php if (!$_GET['p'] || $_GET['p'] == 'login' || !$_SESSION['user_data']) {?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5597044365dd40373416574_44060569', "leftlinks");
?>

                </ul>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9947927175dd40373418bf6_74958661', "rightlinks");
?>

                
                <div class="dropdown">
                    <?php if ($_SESSION['user_data']['image_url'] != null) {?>
                        <a data-toggle="dropdown" href="#" aria-haspopup="true"
                           aria-expanded="false"><img style="width: 50px; height: 50px;border-radius: 50%" src="./<?php echo $_SESSION['user_data']['image_url'];?>
"
                                                             class="user-profile fas fa-user-circle"/></a>
                    <?php } else { ?>
                        <a href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><img
                                    src="https://robohash.org/<?php echo $_SESSION['user_data']['full_name'];?>
?size=50x50"
                                    class="user-profile fas fa-user-circle"
                                    /></a>
                    <?php }?>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="./index.php?p=profile">Edit Profile</a>
                        <a class="dropdown-item" href="./index.php?p=login&logout=Y">Log out</a>
                    </div>
                </div>

                                

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </nav>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2523151195dd40373425ab7_01779086', "nav");
?>

</header>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12891933965dd40373427ff9_26810973', "body");
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

<div class="toast hide" data-autohide="true" data-delay="5000" data-animation="true">
    <div class="toast-header">
        <strong class="mr-auto text-primary content">RevisionIT</strong>

        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        Profile successfully updated
    </div>
</div>

<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
<?php echo '<script'; ?>
 src="./vendor/trumbowyg/dist/trumbowyg.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./vendor/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./vendor/trumbowyg/dist/plugins/base64/trumbowyg.base64.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./vendor/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./vendor/owlcarousel/dist/owl.carousel.min.js"><?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5716423285dd4037342a691_83630266', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12194604975dd4037342c890_32632862', "scripts");
?>


<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="form-validation.js"><?php echo '</script'; ?>
>-->

</body>
</html>
<?php }
/* {block "leftlinks"} */
class Block_5597044365dd40373416574_44060569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftlinks' => 
  array (
    0 => 'Block_5597044365dd40373416574_44060569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leftlinks"} */
/* {block "rightlinks"} */
class Block_9947927175dd40373418bf6_74958661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightlinks' => 
  array (
    0 => 'Block_9947927175dd40373418bf6_74958661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "rightlinks"} */
/* {block "nav"} */
class Block_2523151195dd40373425ab7_01779086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'nav' => 
  array (
    0 => 'Block_2523151195dd40373425ab7_01779086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "nav"} */
/* {block "body"} */
class Block_12891933965dd40373427ff9_26810973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12891933965dd40373427ff9_26810973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_5716423285dd4037342a691_83630266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_5716423285dd4037342a691_83630266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_12194604975dd4037342c890_32632862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_12194604975dd4037342c890_32632862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}
