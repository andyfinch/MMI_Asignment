
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
    {if !$smarty.get.p || $smarty.get.p == 'login' || !$smarty.session.user_data}
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand" href="./index.php">
                <img src="./images/list-logo.png" width="30" height="30" class="d-inline-block align-top"
                     alt="">
                RevisionIT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 id="navbarSupportedContent"">
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
        {else}
        <nav class="navbar navbar-expand-sm navbar-light bg-lightx">
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
                    {block name="leftlinks"}{/block}
                </ul>
                {block name="rightlinks"}{/block}
                
                <div class="dropdown">
                    {if $smarty.session.user_data.image_url != null}
                        <a data-toggle="dropdown" href="#" aria-haspopup="true"
                           aria-expanded="false"><img style="width: 50px; height: 50px;border-radius: 50%" src="./{$smarty.session.user_data.image_url}"
                                                             class="user-profile fas fa-user-circle"/></a>
                    {else}
                        <a href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><img
                                    src="https://robohash.org/{$smarty.session.user_data.full_name}?size=50x50"
                                    class="user-profile fas fa-user-circle"
                                    /></a>
                    {/if}
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
    {/if}
    {block name="nav"}{/block}
</header>

{block name="body"}{/block}


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

<script src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"></script>
<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/popper.js"></script>
<script src="./bootstrap/bootstrap.bundle.js"></script><!--TODO-->
<script src="./js/scripts.js"></script>
<script src="./vendor/trumbowyg/dist/trumbowyg.min.js"></script>
<script src="./vendor/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
<script src="./vendor/trumbowyg/dist/plugins/base64/trumbowyg.base64.min.js"></script>
<script src="./vendor/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js"></script>
<script src="./vendor/owlcarousel/dist/owl.carousel.min.js"></script>

{block name="modals"}{/block}

{block name="scripts"}{/block}

<script>

</script>
<!--<script src="form-validation.js"></script>-->

</body>
</html>
