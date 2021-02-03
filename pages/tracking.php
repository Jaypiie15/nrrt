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
					
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">RRR No. <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control ">
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


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
           
                            <th class="column-title">RRR No. </th>
                            <th class="column-title">Event Date </th>
                            <th class="column-title">Event Name </th>
                            <th class="column-title">Organizer Name </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Venue </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">

                            <td class=" ">121000040</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">MTV Meeting </td>
                            <td class=" ">John Blank L</td>
                            <td class=""><span class="badge badge-warning">Pending</span></td>
                            <td class="a-right a-right ">ARD Room</td>
                            <td class=" last"><a href="#" class="btn btn-primary btn-sm">Follow up <i class="fa fa-envelope"></i></a><a href="#" class="btn btn-info btn-sm">Reschedule <i class="fa fa-calendar"></i></a><a href="#" class="btn btn-danger btn-sm">Cancel <i class="fa fa-times"></i></a>
                            </td>
                          </tr>
                          <tr class="odd pointer">

                            <td class=" ">121000039</td>
                            <td class=" ">May 23, 2014 11:30:12 PM</td>
                            <td class=" ">Senate Hearing </td>
                            <td class=" ">OED</td>
                            <td class=" "><span class="badge badge-success">Approved</span></td>
                            <td class="a-right a-right ">MIB Room</td>
                            <td class=" last">
                            <a href="#" class="btn btn-primary btn-sm">Follow up <i class="fa fa-envelope"></i></a>
                            <a href="#" class="btn btn-info btn-sm">Reschedule <i class="fa fa-calendar"></i></a>
                            <a href="#" class="btn btn-danger btn-sm">Cancel <i class="fa fa-times"></i></a>

                            </td>
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

<?php include 'includes/footer.php';?>