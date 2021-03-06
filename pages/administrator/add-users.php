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
                                    <form class="" id="form_adduser" action="" method="post">
                                      
                                        <span class="section">Add User <i class="fa fa-user-plus"></i></span>
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
                                        <input type="hidden" name="function" value="add_user">
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary btn-add">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive ">
                                    <div id="user_table"></div>

                                </div>
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
        type: 'POST',
        url : 'redirect',
        data : { function : 'user_table'},
        success : function(res){
            $('#user_table').html(res);

            $('.btn-view').on('click',function() {

            document.cookie = "user_id="+$(this).val();"path=/";
            window.location = "edit-user";
            })
        }

    })


    $('.btn-add').click( e=> {

            e.preventDefault();


            if($('#lastname').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Lastname Missing!',
                text: 'Input not complete.'
              })
            }
            else if($('#firstname').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Firstname Missing!',
                text: 'Input not complete.'
              })
            }
           else if($('#password').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Password Missing!',
                text: 'Input not complete.'
              })
            }
            else if($('#password2').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Repeat Password Missing!',
                text: 'Input not complete.'
              })
            }
            else if($('#email').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Email Missing!',
                text: 'Input not complete.'
              })
            }
           else if($('#division').val() == ''){
                Swal.fire({
                icon: 'error',
                title: 'Division Missing!',
                text: 'Input not complete.'
              })
            }

            else {


            var form = $('#form_adduser').serialize();

            Swal.fire({
                  title: 'Are you sure you want to Add as an Administrator?',
                  showCancelButton: true,
                  confirmButtonText: `Yes`,
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {

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
                                    }
                                    else {
                                        Swal.fire({
                                                icon: 'success',
                                                title: 'Add Administrator Success!',
                                                footer: '<h3><b><a href="add-users">Close</a></b></h3>',
                                                showConfirmButton:false
                                                })
                                    }
                            }

            })
            }
        })

        }

    })




})
</script>