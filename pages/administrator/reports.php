<?php include 'pages/administrator/includes/header.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Generate Report </h3>
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
					
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                    <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Start Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left startdate" name="startdate" aria-describedby="inputSuccess2Status4">
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                        </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">End Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control has-feedback-left enddate" name="enddate"  aria-describedby="inputSuccess2Status4">
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
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

                  <div class="card-box table-responsive">

                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>RRR No.</th>
                          <th>Event Name</th>
                          <th>Division / RTOC </th>
                          <th>Event Date and Time</th>
                          <th>Organizer Name</th>
                          <th>Mode of Activity</th>
                          <th>Venue</th>
                          <th>Resources Used</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>121000040</td>
                          <td>MTV Meeting</td>
                          <td>ARD</td>
                          <td>May 23, 2014 11:47:56 PM</td>
                          <td>John Blank L</td>
                          <td>Virtual</td>
                          <td>ARD Room</td>
                          <td>Webcam, Boya Mic</td>
                        </tr>
                        <tr>
                          <td>121000039</td>
                          <td>Senate Hearing</td>
                          <td>OED</td>
                          <td>May 23, 2014 11:30:12 PM</td>
                          <td>OED</td>
                          <td>Virtual</td>
                          <td>MIB Room</td>
                          <td>Webcam, Boya Mic</td>
                        </tr>

                      </tbody>
                    </table>
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

<?php include 'pages/administrator/includes/footer.php';?>