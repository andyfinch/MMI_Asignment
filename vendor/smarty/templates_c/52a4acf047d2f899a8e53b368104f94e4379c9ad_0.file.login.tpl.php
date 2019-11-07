<?php
/* Smarty version 3.1.33, created on 2019-11-07 15:49:25
  from 'C:\wamp64\www\MMI_Assignment\views\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc43d05044685_38485310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a4acf047d2f899a8e53b368104f94e4379c9ad' => 
    array (
      0 => 'C:\\wamp64\\www\\MMI_Assignment\\views\\pages\\login.tpl',
      1 => 1573141714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc43d05044685_38485310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2471504545dc43d0502bda2_13323490', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18734188165dc43d0502ebb7_73892057', "modals");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10537532055dc43d05037085_80114886', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_2471504545dc43d0502bda2_13323490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2471504545dc43d0502bda2_13323490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="row pt-5 h-100" style="margin-top: 10em">
          <div class="col-4 offset-1">
              <div class=""><h1 class="">The best revision content site for students</h1>
                  <p class="">RevisionIT is designed to allow students to create revision content, annotate it, edit it
                      and know it.<br></p>
                  <button class="btn btn-primary btn-lg btn-block" type="submit" data-toggle="modal"
                          data-target="#signupModal">Sign up
                  </button>
              </div>
          </div>

          <div class="col-5 offset-2">
              <div class="learning-image">
              </div>
          </div>

      </div>
<?php
}
}
/* {/block "body"} */
/* {block "modals"} */
class Block_18734188165dc43d0502ebb7_73892057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_18734188165dc43d0502ebb7_73892057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="signUpForm" class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="signup">
 <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="container">
                     <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                     <div class="alert alert-danger" role="alert">
                         <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                     </div>
                     <?php }?>

                     <div class="text-center">
                         <h2>Sign up</h2>
                         <p class="lead">Please enter your details below to sign up</p>
                     </div>

                     <div class="row">
                         <div class="col-md-12 order-md-1">

                             <div class="mb-3">
                                 <label for="userName">User Name </label>
                                 <input type="text" class="form-control" id="userName" name="userName">
                                 <div class="invalid-feedback">
                                     Please enter a valid user name.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="email">Email </label>
                                 <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
                                 <div class="invalid-feedback">
                                     Please enter a valid email address for shipping updates.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="password">Password </label>
                                 <input type="password" class="form-control" id="password" name="password">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
                                 </div>
                             </div>

                             <div class="mb-3">
                                 <label for="confirmPassword">Confirm Password </label>
                                 <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                 <div class="invalid-feedback">
                                     Please enter a valid password.
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col mb-3">
                                     <label for="fullName">Full name</label>
                                     <input type="text" class="form-control" id="fullName" placeholder="" value=""
                                            required="" name="fullName">
                                     <div class="invalid-feedback">
                                         Valid name is required.
                                     </div>
                                 </div>
                             </div>


                             <div class="mb-3">
                                 <label for="city">City</label>
                                 <input type="text" class="form-control" id="city" required="">
                                 <div class="invalid-feedback">
                                     Please enter valid city.
                                 </div>
                             </div>

                             <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="terms">
                                 <label class="custom-control-label" for="terms">Please tick to accept the Terms and
                                     Conditions</label>
                             </div>



                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Sign up
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                 </button>
                 <!--<button onclick="runSignup()" type="button" class="btn btn-primary">
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                     Sign up
                 </button>-->
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>

     </div>
 </div>
</form>

 <!-- Modal -->
<form class="needs-validation" novalidate="" method="post" action="index.php">
    <input type="hidden" name="action" value="signin">
 <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>-->
             <div class="modal-body">
                 <div class="container">
                     <div class="text-center">
                         <h2>Sign in</h2>
                         <p class="lead">Please enter your details below to sign up</p>
                     </div>

                     <div class="row">
                         <div class="col-md-12 order-md-1">
                             <form id="signinform" class="needs-validation" novalidate="">

                                 <div class="mb-3">
                                     <label for="userName">User Name </label>
                                     <input type="text" class="form-control" id="userName" name="userName" required>
                                     <div class="invalid-feedback">
                                         Please enter a valid User Name.
                                     </div>
                                 </div>

                                 <div class="mb-3">
                                     <label for="signinpassword">Password </label>
                                     <input type="password" class="form-control" id="password" name="password" required>
                                     <div class="invalid-feedback">
                                         Please enter a valid password.
                                     </div>
                                 </div>

                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary">Sign in
                     <span class="signupSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                 </button>
                 <!--<button onclick="runSignin()" type="button" class="btn btn-primary">
                     <span class="signinSpinner d-none spinner-border spinner-border-sm" role="status"
                           aria-hidden="true"></span>
                     Sign in
                 </button>-->
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>
</form>
<?php
}
}
/* {/block "modals"} */
/* {block "scripts"} */
class Block_10537532055dc43d05037085_80114886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_10537532055dc43d05037085_80114886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>

      $(function () {

          $('.modal').on('hidden.bs.modal', function (e) {
              $('.errorMessage', this).remove();
              $('.errorHighlight', this).removeClass('errorHighlight');
              $(':input', this).val('');
          });
          signUpForm.init();


          // Variable to hold request
//           var request;
//
// // Bind to the submit event of our form
//           $("form").submit(function (event) {
//
//               // Prevent default posting of form - put here to work in case of errors
//               event.preventDefault();
//
//               $('.signupSpinner').toggleClass('d-none');
//
//               // Abort any pending request
//               if (request) {
//                   request.abort();
//               }
//               // setup some local variables
//               var $form = $(this);
//
//               // Let's select and cache all the fields
//               var $inputs = $form.find("input, select, button, textarea");
//
//               // Serialize the data in the form
//               var serializedData = $form.serialize();
//
//               // Let's disable the inputs for the duration of the Ajax request.
//               // Note: we disable elements AFTER the form data has been serialized.
//               // Disabled form elements will not be serialized.
//               $inputs.prop("disabled", true);
//
//               // Fire off the request to /form.php
//               request = $.ajax({
//                   url: "index.php",
//                   type: "post",
//                   data: serializedData
//               });
//
//               // Callback handler that will be called on success
//               request.done(function (response, textStatus, jqXHR) {
//                   // Log a message to the console
//                   console.log("Hooray, it worked!");
//
//                   $('.errorMessage').remove();
//                   $('.errorHighlight').removeClass('errorHighlight');
//                   //alert(response);
//                   let errors = JSON.parse(response);
//                   console.log(errors);
//                   if ( errors.length>0)
//                   {
//                       for (const error of errors) {
//                           $('#' + error.name).addClass('errorHighlight');
//                           if ( error.message)
//                           {
//                               $('#' + error.name).after("<div class='errorMessage'>" + error.message + "</div>");
//                           }
//
//
//                           console.log(error);
//                       }
//                   }
//                   else
//                   {
//                       document.location.href = "./index.php?p=dashboard"
//                   }
//
//
//                   //$('#signupModal .modal-content').replaceWith($('#signupModal .modal-content', response));
//
//               });
//
//               // Callback handler that will be called on failure
//               request.fail(function (jqXHR, textStatus, errorThrown) {
//                   // Log the error to the console
//                   console.error(
//                       "The following error occurred: " +
//                       textStatus, errorThrown
//                   );
//               });
//
//               // Callback handler that will be called regardless
//               // if the request failed or succeeded
//               request.always(function () {
//                   // Reenable the inputs
//                   $inputs.prop("disabled", false);
//                   $('.signupSpinner').toggleClass('d-none');
//               });
//
//           });
        });

      function runSignin() {
          if (validateForm($('#signinform')[0])) {
              $('.signinSpinner').toggleClass('d-none');
              setTimeout(function () {
                  $('.signinSpinner').toggleClass('d-none');
                  // Something you want delayed.
                  document.location.href = "./index.php?p=dashboard"
              }, 1000); // How long do you want the delay to be (in milliseconds)?
          }


      }

      function runSignup() {
          $('.signupSpinner').toggleClass('d-none');
          setTimeout(function () {
              $('.signupSpinner').toggleClass('d-none');
              // Something you want delayed.
              document.location.href = "./index.php?p=dashboard"
          }, 1000); // How long do you want the delay to be (in milliseconds)?

      }

      function validateForm(form) {
          let isValid = form.checkValidity();

          if (isValid === false) {
              console.log('not valid');
          } else {
              console.log("valid");
          }
          form.classList.add('was-validated');

          return isValid;
      }


  <?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>

<?php echo '<script'; ?>
>
    console.log("hello");
    $(function() {
        $("#signupModal").modal("show");
    });
<?php echo '</script'; ?>
>

<?php }
}
}
/* {/block "scripts"} */
}
