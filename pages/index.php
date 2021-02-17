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
            <div id='loader' style='display: none;position: absolute;z-index: 10;margin-left: 647px;margin-top: 240px;'>
              <img src='build/images/loading.gif' width='300px' height='300px'>
            </div>
                  <div class="x_content">
                      
                  <div class='calendar-parent col-md-6' style="height:730px">
                  
                  <div id='calendars'></div>
                  
                    </div>
                    <div class="col-md-6">
                        
                     

                    </div>
                    <div class="col-md-6">
                    <div class="x_content">
                                    <form action="" id="reservation_form" method="post" novalidate>
                                        <span class="section">Book your Meeting</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="email" class='email' id="email" required="required" type="email" /></div>
                                            <label style="color:red">Note <span class="required">:</span> Confirmation of your reservation will be sent here.</label>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">RTOC / Division / Unit / Section / TWG<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="division" id="division"  required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Organizer's Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="name" id="name" required="required" />
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Contact Number (Mobile / Tel or Local)<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="number" id="number" required="required" />
                                            </div>
                                        </div>
                                        <span class="section">Activity Info</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Title of Activity<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="title" id="title" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Activity Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control"  name="description" id="description" required="required" />
                                            <label style="color:red"><span class="required"></span> *Brief description of the activity.</label>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Mode of Activity<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <div id="mode" class="btn-group" data-toggle="buttons">
                                              <label class="btn btn-secondary btn-sm" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="mode" value="Face to Face" class="join-btn"> &nbsp; Face to Face &nbsp;
                                              </label>
                                              <label class="btn btn-primary btn-sm" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="mode" value="Virtual" class="join-btn"> Virtual
                                              </label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Do you need a Meeting ID?<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <p>
                                                Yes:
                                                <input type="radio" class="flat" name="meetingid" id="meetingidY" value="Yes" checked="" required /> 
                                                No:
                                                <input type="radio" class="flat" name="meetingid" id="meetingidN" value="No" />
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
                                              <input type="checkbox" name="devices[doccam]" id="doccam" value="Document Camera" class="flat" /> Document Camera
                                              <br />

                                              <input type="checkbox" name="devices[webcam]" id="webcam" value="Webcam" class="flat" /> Webcam
                                              <br />

                                              <input type="checkbox" name="devices[deskmic]" id="deskmic" value="Desk Mic" class="flat" /> Desk Mic
                                              <br />

                                              <input type="checkbox" name="devices[mic]" id="mic" value="Microphone" class="flat" /> Microphone
                                              <br />
                                                                    
                                              <input type="checkbox" name="devices[vmic]" id="vmic" value="Boya" class="flat" /> Virtual Mic (Boya)
                                              <br />
                                              <input type="checkbox" name="devices[hdmi]" id="hdmi" value="HDMI" class="flat" /> HDMI Cable
                                              <br />
                                                                    
                                              <input type="checkbox" name="devices[none]" id="na" value="N/A" class="flat" /> N/A
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Notes / Instructions / Remarks<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <textarea required="required" name='message'></textarea></div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <input type="hidden" name="function" value="add_reservation">
                                                    
                                                    <button type='submit' name="btn_submitRequest" class="btn btn-primary btn_submitRequest">Submit Request</button>
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
    <div id="CalenderModalEdit" class="modal fade CalenderModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control event_title" id="event_title" name="event_title" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Event Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control event_desc" style="height:55px;" id="event_desc" name="descr" disabled></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Organizer</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_organizer" id="event_organizer" name="event_organizer" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Division</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_division" id="event_division" name="event_division" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Start Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_startTime" id="event_startTime" name="event_startTime" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">End Time</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_endTime" id="event_endTime" name="event_endTime" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Venue</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_venue" id="event_venue" name="event_venue" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Resources</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_resources" id="event_resources" name="event_resources" disabled>
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
    <div id="fc_edit" class="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>





 
        </div>
        <!-- /page content -->

<?php include 'includes/footer.php';?>
<script>
    $(function() {

      var date = new Date(),
        d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear(),
        started,
        categoryClass;
        
      $.ajax({
          type : 'POST',
          url : 'redirect',
          data : { function : 'fetch_events'},
          dataType: "json",
      success : function(res){
            var calendar = $('#calendars').fullCalendar({
              themeSystem: 'bootstrap3',
              header: {
                left: false,
                center: 'prev title next',
                right: false
              },
              height: 'parent',

        eventClick: function (calEvent, jsEvent, view) {

            // console.log(calEvent)
            // $('#fc_edit').click();
            $('.CalenderModalEdit').addClass('modal-edit-'+calEvent.id)
             $('.event_title').addClass('event-title-'+calEvent.id);
             $('.event_desc').addClass('event-desc-'+calEvent.id);
             $('.event_organizer').addClass('event-organizer-'+calEvent.id);
             $('.event_startTime').addClass('event-startTime-'+calEvent.id);
             $('.event_endTime').addClass('event-endTime-'+calEvent.id);
             $('.event_venue').addClass('event-venue-'+calEvent.id);
             $('.event_resources').addClass('event-resources-'+calEvent.id);
             $('.event_division').addClass('event-division-'+calEvent.id);

             $('.modal-edit-'+calEvent.id).modal('show')

            $.each(res,function(k,v){

              $('.event-title-'+v.id).val(v.title);
              $('.event-desc-'+v.id).val(v.desc);
              $('.event-organizer-'+v.id).val(v.name);
              $('.event-startTime-'+v.id).val(v.startTime);
              $('.event-endTime-'+v.id).val(v.endTime);
              $('.event-venue-'+v.id).val(v.venue);
              $('.event-resources-'+v.id).val(v.resources);
              $('.event-division-'+v.id).val(v.division);

              $('.antoclose2').click(function(){
                $('.CalenderModalEdit').removeClass('modal-edit-'+calEvent.id)
                $('.event_title').removeClass('event-title-'+calEvent.id);
                $('.event_desc').removeClass('event-desc-'+calEvent.id);
                $('.event_organizer').removeClass('event-organizer-'+calEvent.id);
                $('.event_startTime').removeClass('event-startTime-'+calEvent.id);
                $('.event_endTime').removeClass('event-endTime-'+calEvent.id);
                $('.event_venue').removeClass('event-venue-'+calEvent.id);
                $('.event_resources').removeClass('event-resources-'+calEvent.id);
                $('.event_division').removeClass('event-division-'+calEvent.id);
              })


            calendar.fullCalendar('unselect');
   

          })


        },
        events : res
        });

          }
      })







$('.startdate').daterangepicker({
    singleDatePicker: true,
    minDate:new Date(),

});
$('.enddate').daterangepicker({
    singleDatePicker: true,
    minDate:new Date(),

});
$('.starttime').daterangepicker({
    timePicker : true,
            singleDatePicker:true,
            timePicker24Hour : true,
            timePickerIncrement : 1,
            timePickerSeconds : true,
            locale : {
                format : 'HH:mm'
            }
        }).on('show.daterangepicker', function(ev, picker) {
            picker.container.find(".calendar-table").hide();
    });
    $('.endtime').daterangepicker({
    timePicker : true,
            singleDatePicker:true,
            timePicker24Hour : true,
            timePickerIncrement : 1,
            timePickerSeconds : true,
            locale : {
                format : 'HH:mm'
             }
        }).on('show.daterangepicker', function(ev, picker) {
            picker.container.find(".calendar-table").hide();
    });



});

$('.btn_submitRequest').click(e =>{
  e.preventDefault();
        var form = $('#reservation_form').serialize();
          if($('#email').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }
          if($('#division').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }
          if($('#name').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }
          if($('#number').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }
          if($('#title').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }
          if($('#description').val() === ''){
            
            Swal.fire({
                icon: 'error',
                title: 'Input Missing!',
                text: 'Input not complete.'
              })
          }

            else{


              Swal.fire({
                  title: 'Are you sure you want to submit?',
                  html : 'By submitting form, I am giving my consent to the collection, processing and disclosure of my personal information for the purposes of this conference in accordance with <b> R.A. 10173 (Data Privacy Act of 2012)</b>.',
                  showCancelButton: true,
                  confirmButtonText: `Yes`,
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    $.ajax({
                        type : 'POST',
                        url : 'redirect',
                        dataType: "json",
                        data :  form,
                        beforeSend : function(){
                          $("#loader").show();
                        },
                        success : function(resp){
                          $("#loader").hide();
                          console.log(resp)
                          if(resp.error == 1){

                                Swal.fire({
                                    icon: 'error',
                                    title: 'There is something wrong!',
                                    text: resp.message
                                    })
                                }else{

                                  Swal.fire({
                                  icon: 'success',
                                  title: 'RRR ID. : ' + resp.transaction_id,
                                  text: 'Input Success! Please copy the reference number above for activity status tracking. Please be also reminded that confirmation of this activity will be sent to your Email Address. Thank you.',
                                  footer: '<h3><b><a href="index">Close</a></b></h3>',
                                  showConfirmButton:false
                                })

                                }

                        },
                        error : function(res){
                          // alert(res)
                        }
                    })
                  } 
                })


      }



    })

</script>