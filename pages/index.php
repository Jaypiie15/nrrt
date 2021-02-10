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
<script>
    $(function() {

                // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        // var validator = new FormValidator({
        //     "events": ['blur', 'input', 'change']
        // }, document.forms[0]);
        // // on form "submit" event
        // document.forms[0].onsubmit = function(e) {
        //     var submit = true,
        //         validatorResult = validator.checkAll(this);
        //     // console.log(validatorResult);
        //     return !!validatorResult.valid;
        // };
        // // on form "reset" event
        // document.forms[0].onreset = function(e) {
        //     validator.reset();
        // };
        // // stuff related ONLY for this demo page:
        // $('.toggleValidationTooltips').change(function() {
        //     validator.settings.alerts = !this.checked;
        //     if (this.checked)
        //         $('form .alert').remove();
        // }).prop('checked', false);


        var date = new Date(),
        d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear(),
        started,
        categoryClass;
    var calendar = $('#calendars').fullCalendar({
    themeSystem: 'bootstrap3',
    header: {
      left: false,
      center: 'prev title next',
      right: false
    },
    height: 'parent',

        eventClick: function (calEvent, jsEvent, view) {
            $('#fc_edit').click();
            $('#title2').val(calEvent.title);
            categoryClass = $("#event_type").val();

            $(".antosubmit2").on("click", function () {
                calEvent.title = $("#title2").val();

                calendar.fullCalendar('updateEvent', calEvent);
                $('.antoclose2').click();
            });

            calendar.fullCalendar('unselect');
        },
    // eventLimit: true, // allow "more" link when too many events
    events: 'https://fullcalendar.io/demo-events.json',
  
    
  });



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

            $.ajax({
            type : 'POST',
            url : 'redirect',
            dataType: "json",
            data :  form,
            beforeSend : function(){
              $("#loader").show();
            },
            complete : function(resp){
              $("#loader").hide();
                    Swal.fire({
                      icon: 'success',
                      title: 'RRR ID. : ' + resp.responseJSON.transaction_id,
                      text: 'Input Success! Please copy the reference number above for activity status tracking. Please be also reminded that confirmation of this activity will be sent to your Email Address. Thank you.',
                      footer: '<h3><b><a href="index">Close</a></b></h3>',
                      showConfirmButton:false
                    })
            },
            error : function(res){
              // alert(res)
            }
        })
      }



    })

</script>