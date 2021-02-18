<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />


    <title>NMIS | RRT </title>
    <?php
    	if (isset($_COOKIE['log_id'])!=""){
        header('location:dashboard');
        }
        ?>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" id="form_login">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
              </div>
              <div>
              <input type="hidden" name="function" value="user_login">
                <button class="btn btn-info submit" id="login" >Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-users"></i> NMIS NRRT</h1>
                </div>
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
    <!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<script>

$(function(){

  $('#login').click( e=> {

                          e.preventDefault()

                          var form = $('#form_login').serialize();

                          $.ajax({
                            type : 'POST',
                            url : 'redirect',
                            dataType : 'json',
                            data : form,
                            success : function(res){
                                  if(res.error == 1){
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'There is something wrong!',
                                            text: res.message
                                            })
                                    }
                                    else{
                                      window.location = "dashboard";
                                    }


                                  }

                                })
    

  })



})

</script>
