<?php include 'pages/administrator/includes/header.php';?>

<div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                            <div id='loader' style='display: none;position: absolute;z-index: 10;margin-left: 647px;margin-top: 240px;'>
                            <img src='build/images/loading.gif' width='300px' height='300px'>
                            </div>
                                <div class="x_content">
                                    <form class="" id="form_updateuser" action="" method="post">
                                      
                                        <span class="section">Edit User <i class="fa fa-pencil"></i></span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Last Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="lastname" name="lastname" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">First Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="firstname" name="firstname" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email Address<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" id="email" name="email" class='email' required="required" type="email" /></div>
                                        </div>

                                        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6">
												<input class="form-control" type="password" id="password1" name="password" required />

											</div>
										</div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="password" id="password2" name="password2" data-validate-linked='password'  required='required' /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Division<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="division" id="division" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Status<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="status" required="required" >
                                            <option name="" value="">-- SELECT ONE --</option>
                                            <option name="activate" value="Activated">Activate</option>
                                            <option name="deactivate" value="Deactivated">Deactivate</option>


                                            </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_id" id="user_id" value="">
                                        <input type="hidden" name="function" value="update_user">
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary btn-update">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'pages/administrator/includes/footer.php';?>
<script>
$(function(){

    $.ajax({
      type : 'POST',
      url : 'redirect',
      dataType : 'json',
      data : {function : 'edit_user'},
      success : function(res){
          $('#lastname').val(res[0].lastname)
          $('#firstname').val(res[0].firstname)
          $('#email').val(res[0].email)
          $('#password1').val(res[0].password)
          $('#password2').val(res[0].password)
          $('#division').val(res[0].division)
          $('#user_id').val(res[0].id)
      }
    })

    $('.btn-update').click( e => {
      e.preventDefault();

      Swal.fire({
            title: 'Are you sure you want to Update this user?',
            showCancelButton: true,
            confirmButtonText: `Save`,
            }).then((result) => {

            if (result.isConfirmed) {
                var form = $('#form_updateuser').serialize();

                        $.ajax({
                            type : 'POST',
                            url : 'redirect',
                            dataType : 'json',
                            data : form,
                            beforeSend : function(){
                                $("#loader").show();

                            },
                            success : function(res){
                            $("#loader").hide();

                            if(res.error == 1){

                                Swal.fire({
                                    icon: 'error',
                                    title: 'There is something wrong!',
                                    text: res.message
                                    })
                            }else{

                            Swal.fire({
                                    icon: 'success',
                                    title: 'User Updated!',
                                    text: 'Account Successfully Updated!',
                                    footer: '<h3><b><a href="add-users">Close</a></b></h3>',
                                    showConfirmButton:false
                                    })

                                }
                            }

                        })
            } else {

            }
            })











  })
})
</script>