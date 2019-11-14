
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
    {if !$smarty.get.p || $smarty.get.p == 'login'}
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
        {else}
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
                    {block name="leftlinks"}{/block}
                </ul>
                {block name="rightlinks"}{/block}
                {*<a href="./index.php?p=profile"><i class="user-profile fas fa-user-circle"></i></a>*}
                <a href="./index.php?p=profile"><img
                            src="https://robohash.org/{$smarty.session.user_data.full_name}?size=50x50" class="user-profile fas fa-user-circle"/></a>
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
<form id="contentModal" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="topic">

    <div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="create">
                    <div class="container">
                        <div class="text-center">
                            <h2>Topic</h2>
                            <p class="lead header">Create a new topic</p>
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
                                    <input type="hidden" id="id" name="id">
                                    <input type="hidden" id="level" name="level" value="0">
                                    <input type="hidden" id="parent_id" name="parent_id" value="0">

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" class="btn btn-primary">Create
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
{block name="modals"}{/block}



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


<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/popper.js"></script>
<script src="./bootstrap/bootstrap.bundle.js"></script><!--TODO-->
<script src="./js/scripts.js"></script>
{block name="scripts"}{/block}
<script>
    $('#contentModal').on('show.bs.modal', function (event) {

        var modal = $(this).find('.modal-content');
        $(':input', modal).val('');
        $(modal).find('#level').val(0);
        $(modal).find('#parent_id').val(0);
        $(modal).find('#function').val('create');
        $(modal).find('.header').val('Create a new topic');

        var button = $(event.relatedTarget);
        var action = button.data('action');

        if (action === 'edit')
        {
            $(modal).find('#function').val('edit');
            $(modal).find('.header').text('Edit topic');
            $(modal).find('#id').val(button.data('id'));
            $(modal).find('#title').val(button.data('title'));
            $(modal).find('#description').val(button.data('description'));
            $(modal).find('#content').val(button.data('content'));
            $(modal).find('#level').val(button.data('level'));
            $(modal).find('#parent_id').val(button.data('parent_id'));
            $(modal).find('#submit').text('Edit');
        }


    })
</script>
<!--<script src="form-validation.js"></script>-->

</body>
</html>
