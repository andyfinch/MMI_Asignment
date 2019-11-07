
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"></script>
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
				{block name="links"}{/block}
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
<div class="container">
{block name="body"}{/block}



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
{block name="modals"}{/block}


<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/popper.js"></script>
<script src="./bootstrap/bootstrap.bundle.js"></script><!--TODO-->
{block name="scripts"}{/block}
<!--<script src="form-validation.js"></script>-->

</body>
</html>
