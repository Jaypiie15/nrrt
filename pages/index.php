<?php include 'includes/header.php';?>

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
                      
                  <div class='calendar-parent col-md-6' style="height:730px">
                  
                  <div id='calendars'></div>
                    </div>
                    <div class="col-md-6">
                        
                     

                    </div>
                    <div class="col-md-6">
                    <div class="x_content">
                                    <form class="" action="" method="post" novalidate>
                                        <span class="section">Book your Meeting</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                                            <label style="color:red">Note <span class="required">:</span> Confirmation of your reservation will be sent here.</label>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">RTOC / Division / Unit / Section / TWG<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="division"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Organizer's Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="name" required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Contact Number (Mobile / Tel or Local)<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="number" required="required" />
                                            </div>
                                        </div>
                                        <span class="section">Activity Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Title of Activity<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="title" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Activity Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="description" required="required" />
                                            <label style="color:red"><span class="required"></span> *Brief description of the activity.</label>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mode of Activity<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <div id="mode" class="btn-group" data-toggle="buttons">
                                              <label class="btn btn-secondary btn-sm" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="mode" value="f2f" class="join-btn"> &nbsp; Face to Face &nbsp;
                                              </label>
                                              <label class="btn btn-primary btn-sm" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="mode" value="virtual" class="join-btn"> Virtual
                                              </label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Do you need a Meeting ID?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <p>
											Yes:
                      <input type="radio" class="flat" name="meetingid" id="meetingidY" value="yes" checked="" required /> 
                      No:
											<input type="radio" class="flat" name="meetingid" id="meetingidN" value="no" />
										</p>
                                            </div>
                                        </div>
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
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Start Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input type='text' class="form-control starttime" name="starttime"/>
      
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">End Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input type='text' class="form-control endtime" name="endtime"/>
      
                                            </div>
                                        </div>
                                        <span class="section">Resources ( Please note that you must bring your own Device)</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Please select Peripherals needed <span class="required">*</span></label>
                                            <p style="padding: 5px;">
											<input type="checkbox" name="devices[]" id="doccam" value="doccam" class="flat" /> Document Camera
											<br />

											<input type="checkbox" name="devices[]" id="webcam" value="webcam" class="flat" /> Webcam
											<br />

											<input type="checkbox" name="devices[]" id="deskmic" value="deskmic" class="flat" /> Desk Mic
											<br />

                                            <input type="checkbox" name="devices[]" id="mic" value="mic" class="flat" /> Microphone
											<br />
                                            
                                            <input type="checkbox" name="devices[]" id="vmic" value="vmic" class="flat" /> Virtual Mic (Boya)
											<br />
                                            
											<input type="checkbox" name="devices[]" id="na" value="na" class="flat" /> N/A
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Notes / Instructions / Remarks<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea required="required" name='message'></textarea></div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit Request</button>
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
                    <input type="text" class="form-control" id="event_organizer" name="event_organizer" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Start Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_startTime" name="event_startTime" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">End Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_endTime" name="event_endTime" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Venue</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_venue" name="event_venue" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Resources</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="event_resources" name="event_resources" disabled>
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

<?php include 'includes/footer.php';?>