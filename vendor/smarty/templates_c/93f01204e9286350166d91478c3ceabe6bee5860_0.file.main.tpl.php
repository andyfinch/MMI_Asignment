<?php
/* Smarty version 3.1.33, created on 2019-11-01 14:29:00
  from 'C:\wamp64\www\MMI_Assignment\views\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbc412c094ed3_36809190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f01204e9286350166d91478c3ceabe6bee5860' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\layouts\\main.tpl',
      1 => 1572618524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbc412c094ed3_36809190 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="./dashboard.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

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
                    <!--<a class="nav-link" href="./join.html">Sign up</a>-->
                </li>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9177479955dbc412c08c161_81716570', "links");
?>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7154227145dbc412c08f0a4_35620248', "body");
?>




</div>

<footer class="my-5 pt-5 text-muted text-center text-small" style="position: absolute; bottom: 0; width: 100%">
    <div>
        <p class="mb-1">&copy; 2019 AJF Plc</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </div>
</footer>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12655516745dbc412c091436_70834619', "modals");
?>



<?php echo '<script'; ?>
 src="./bootstrap/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap/bootstrap.bundle.js"><?php echo '</script'; ?>
><!--TODO-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11798659625dbc412c093995_82097733', "scripts");
?>

<!--<?php echo '<script'; ?>
 src="form-validation.js"><?php echo '</script'; ?>
>-->

</body>
</html>
<?php }
/* {block "links"} */
class Block_9177479955dbc412c08c161_81716570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'links' => 
  array (
    0 => 'Block_9177479955dbc412c08c161_81716570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "links"} */
/* {block "body"} */
class Block_7154227145dbc412c08f0a4_35620248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7154227145dbc412c08f0a4_35620248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_12655516745dbc412c091436_70834619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_12655516745dbc412c091436_70834619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_11798659625dbc412c093995_82097733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_11798659625dbc412c093995_82097733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}
