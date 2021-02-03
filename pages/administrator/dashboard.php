<?php include 'pages/administrator/includes/header.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>NRRT Calendar <small>Click to view meetings</small></h3>
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
                <div class="col-md-2"></div>
                  <div class="col-md-8">
                  <div class="row" style="display: inline-block;" >
                    <div class="tile_count">
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-redo"></i> Pending</span>
                        <div class="count">2500</div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-arrow-circle-up"></i> Follow up</span>
                        <div class="count">123</div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-check-circle"></i> Approved</span>
                        <div class="count green">2,500</div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-times"></i> Cancelled</span>
                        <div class="count">4,567</div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-calendar"></i> Rescheduled</span>
                        <div class="count">2,315</div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Overall Total</span>
                        <div class="count">7,325</div>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class='calendar-parent col-md-6' style="height:730px">
                  
                  <div id='calendars'></div>
                    </div>
                    <div class="col-md-6">
                        
                     

                    </div>
                    <div class="col-md-6">
                    <div class="x_panel">
                  <div class="x_title">
                    <h2>Event List <small></small></h2>

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
                            <td class=" last"><a href="#" class="btn btn-info btn-sm">View</a>
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
                            <a href="#" class="btn btn-info btn-sm">View </a>


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
          </div>
        </div>
          <!-- /top tiles -->
    <!-- calendar modal -->
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel2">Meeting Details</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Event title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_title" name="title2" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Event Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="event_desc" name="descr" disabled></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Organizer</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_organizer" name="title2" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Start Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_startTime" name="title2" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Venue</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_venue" name="title2" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Resources</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_resources" name="title2" disabled>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>





 
        </div>
        <!-- /page content -->

<?php include 'pages/administrator/includes/footer.php';?>