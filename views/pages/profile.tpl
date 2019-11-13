{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="container">
        <div class="row mt-5">


            <div class="col-md-4">

                <div class="card border-secondary" style="width: 18rem;">
                    <img class="card-img-top"
                         src="https://robohash.org/{$smarty.session.user_data.full_name}?size=150x150"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{$smarty.session.user_data.full_name}</h5>
                        <p class="card-text">{$smarty.session.user_data.user_name}</p>
                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <form id="form" class="needs-validation" novalidate="" action="index.php" method="post">
                    <input type="hidden" name="action" value="profile">

                    <!-- front content -->
                    <div class="card border-secondary">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>User Profile</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="text-secondary" onclick="editForm();" href="#"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="userName">User Name </label>
                                <input disabled type="text" class="form-control"
                                       value="{$smarty.session.user_data.user_name}">
                                <input type="hidden" class="form-control" id="userName" name="userName"
                                       value="{$smarty.session.user_data.user_name}">
                                <div class="invalid-feedback">
                                    Please enter a valid user name.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email </label>
                                <input disabled type="email" class="form-control editable" name="email" id="email"
                                       value="{$smarty.session.user_data.email}">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            {*<div class="mb-3">
                                <label for="password">Password </label>
                                <input disabled type="password" class="form-control editable" id="password" name="password" value="{$smarty.session.user_data.password}">
                                <div class="invalid-feedback">
                                    Please enter a valid password.
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="confirmPassword">Confirm Password </label>
                                <input disabled type="email" class="form-control editable" id="confirmPassword" name="confirmPassword"
                                       value="{$smarty.session.user_data.password}">
                                <div class="invalid-feedback">
                                    Please enter a valid password.
                                </div>
                            </div>*}

                            <div class="row">
                                <div class="col mb-3">
                                    <label for="fullName">Full name</label>
                                    <input disabled type="text" class="form-control editable" id="fullName"
                                           name="fullName"
                                           value="{$smarty.session.user_data.full_name}" required="">
                                    <div class="invalid-feedback">
                                        Valid name is required.
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="city">City</label>
                                <input disabled type="text" class="form-control editable" id="city" name="city"
                                       value="{$smarty.session.user_data.city}" required="">
                                <div class="invalid-feedback">
                                    Please enter valid city.
                                </div>
                            </div>


                            <div class="modal-footer d-none">
                                <button type="submit" class="btn btn-primary">
                  <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                        aria-hidden="true"></span>
                                    Save
                                </button>
                                <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>
    </div>
{/block}

{block name="scripts"}
    <script>
        postAjax.init();

        function editForm() {


            $('#form input.editable').removeAttr('disabled');
            $('#form .modal-footer.d-none').removeClass('d-none')
        }

        function cancelEdit() {

            $('#form')[0].reset();
            $('#form input.editable').prop('disabled', true);
            $('#form .modal-footer').toggleClass('d-none')
        }


    </script>
    {if $message}
        <script>

            $(function () {
                var message = '{$message}';
                //$('.toast .toast-header .content').text(message);
                $('.toast .toast-body').text(message);
                $('.toast').toast('show');

            });
        </script>
    {/if}
{/block}
