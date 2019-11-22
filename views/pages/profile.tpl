{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="container">
        <div class="row mt-5">


            <div class="col-md-4">

                <div data-toggle="modal" data-target="#imageModal"
                     class="card border-secondary">
                    <a href="#" title="Change Profile Picture">
                    {if $smarty.session.user_data.image_url != null}
                        <img class="card-img-top"
                             src="./{$smarty.session.user_data.image_url}"
                             alt="Card image cap">
                    {else}
                        <img class="card-img-top"
                             src="https://robohash.org/{$smarty.session.user_data.full_name}?size=150x150"
                             alt="Card image cap">
                    {/if}

                    </a>



                    <div class="card-body">
                        <h5 class="card-title">{$smarty.session.user_data.full_name}</h5>
                        <p class="card-text">{$smarty.session.user_data.user_name}</p>
                    </div>
                </div>


            </div>

            <div class="col-md-8">
                <form id="form" class="needs-validation" novalidate="" action="index.php" method="post">
                    <input type="hidden" name="action" value="profile">
                    <input id="function" type="hidden" name="function" value="editProfile">
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


    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    <input id="function" type="hidden" name="function" value="createImage">
                    <input type="hidden" name="action" value="profile">
                    <div class="container">
                        <div class="text-center">
                            <h2>Upload profile picture</h2>
                        </div>

                        <div class="row">


                            <div class="form-group">
                                <label for="upload">Select image to upload:</label>
                                <input type="file" class="form-control-file" name="fileToUpload[]" id="fileToUpload">
                            </div>                             

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submit" type="submit" name="submit" class="btn btn-primary" onclick="$('#function').val('createImage')">Upload Image
                        <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                              aria-hidden="true"></span>
                    </button>
                    <button type="submit" name="remove" class="btn btn-secondary" onclick="$('#function').val('deleteImage')">Remove image</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </form>
        </div>
    </div>
{/block}
{block name="modals"}
    {include file="../components/content_modal.tpl"}
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
