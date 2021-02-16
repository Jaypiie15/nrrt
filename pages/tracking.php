<?php include 'includes/header.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Track Reservation <small>Enter your RRR No.</small></h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
            
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                      
                  <div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
              <div id='loader' style='display: none;position: absolute;z-index: 10;margin-left: 647px;margin-top: 240px;'>
              <img src='build/images/loading.gif' width='300px' height='300px'>
            </div>
								<div class="x_content">
									<br />
									<form id="rrr_form" method="POST" action="" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="function" value="track_rrr">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">RRR No. <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="rrr" name="rrr" required="required" class="form-control ">
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" id="track_search" class="btn btn-success btn-sm">Search <i class="fa fa-search"></i></button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
  
   
                </div>

                <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Results <small></small></h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive ">
                        <div id="track_table"></div>

                    </div>
							
						
                  </div>
                </div>
              </div>


              </div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->






 
        </div>
        <!-- /page content -->

<?php include 'includes/footer.php';?>

<script>
$(function(){


    // $.ajax({
    //         type : 'POST',
    //         url : 'redirect',
    //         dataType : 'json',
    //         data : {function : 'track_rrr',rrr : '1234'},
    //         complete : function(res){
    //             $('#track_table').html(res.responseText);
    //         }
    //       })

  $('#track_search').click( e => {
        var form = $('#rrr_form').serialize();
        e.preventDefault();

        $.ajax({
            type : 'POST',
            url : 'redirect',
            // dataType : 'json',
            data : form,
            beforeSend : function(){
              $("#loader").show();
            },
            success : function(res){
              $("#loader").hide();
                $('#track_table').html(res);

            }

        })

  })
})

</script>