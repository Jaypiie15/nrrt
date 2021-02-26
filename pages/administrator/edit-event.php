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
                                    <form class="" id="form_update" method="post" novalidate>

                                        <span class="section">Event Details</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Event Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="event_name" id="event_name" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Event Description<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="event_description" id="event_description" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">  Activity Mode<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="activity_mode" id="activity_mode" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Expected number of Participants<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="number_participants" id="number_participants" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Organizer Name<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="organizer_name" id="organizer_name" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Start Date<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control startdate" name="start_date" id="start_date" disabled/>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> End Date <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control enddate" name="end_date" id="end_date" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Start Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control starttime" name="start_time" id="start_time" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> End Time <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control endtime" name="end_time" id="end_time" disabled />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Venue<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control" name="event_venue" required="required" >
                                            <option name="" value="">-- SELECT ONE --</option>
                                            <option name="mib" value="MIB Room">MIB Room</option>
                                            <option name="tra" value="Training Room A">Training Room A</option>
                                            <option name="trb" value="Training Room B">Training Room B</option>
                                            <option name="cra" value="Conference Room A">Conference Room A</option>
                                            <option name="own" value="Own Division Room">Own Division Room</option>

                                            </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Meeting Link<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="meeting_link" id="meeting_link" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align"> Remarks / Instructions<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" name="admin_remarks" id="admin_remarks" required="required" />
                                            </div>
                                        </div>
                                        <!-- <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Update Status<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="meeting_status" required="required" >
                                            <option name="approve" value="Approved">Approve</option>
                                            <option name="cancel" value="Cancelled">Cancel</option>
                                            <option name="reschedule" value="Rescheduled">Reschedule</option>

                                            </select>
                                            </div>
                                        </div> -->
                                        <input type="hidden" name="function" value="update_event">
                                        <input type="hidden" name="res_id" id="res_id" value="">
                                        <input type="hidden" name="email" id="email" value="">
                                        <input type="hidden" name="transaction_id" id="transaction_id" value="">
                                        <input type="hidden" name="title" id="title" value="">
                                        <input type="hidden" name="desc" id="desc" value="">
                                        <input type="hidden" name="event_title" id="event_title" value="">
                                        <input type="hidden" name="start_date" id="eventstart_date" value="">
                                        <input type="hidden" name="end_date" id="eventend_date" value="">
                                        <input type="hidden" name="start_time" id="eventstart_time" value="">
                                        <input type="hidden" name="end_time" id="eventend_time" value="">
                                        <input type="hidden" name="resources" id="resources" value="">
                                        <input type="hidden" name="resched" id="resched" value="2">
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-success btn-update">Approve Request</button>
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
    $(function() {

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


  $.ajax({
      type : 'POST',
      url : 'redirect',
      dataType : 'json',
      data : {function : 'edit-event'},
      success : function(res){
            // console.log(res[0])
            if(res[0].status == 'Rescheduled'){
            $('#start_date').removeAttr('disabled');
            $('#end_date').removeAttr('disabled');
            $('#start_time').removeAttr('disabled');
            $('#end_time').removeAttr('disabled');
            $('#resched').val(1);

            $('#eventstart_date').attr('disabled',true);
            $('#eventend_date').attr('disabled',true);
            $('#eventstart_time').attr('disabled',true);
            $('#eventend_time').attr('disabled',true);
            }

            if(res[0].status == 'Cancelled'){
                $('.btn-update').hide();
            }

            if(res[0].activity_mode == 'Virtual' && res[0].activity_id == 'Yes'){
                var mode = 'Virtual Host';
                $('#activity_mode').val(mode)
                $('#meeting_link').val(res[0].meeting_link)

            }
            else if(res[0].activity_mode == 'Virtual' && res[0].activity_id == 'No'){
                var mode = 'Virtual Joiner';
                $('#activity_mode').val(mode)
                $('#meeting_link').val(res[0].meeting_link)

            }
            else if(res[0].activity_mode == 'Face to Face'){
                var mode = 'Face to Face Meeting';
                var link = 'N/A';
                $('#meeting_link').val(link)
                $('#activity_mode').val(mode)

            }
            else {
                $('#activity_mode').val(mode)
                $('#meeting_link').val(res[0].meeting_link)

            }
            $('#event_name').val(res[0].activity_title)
            $('#event_description').val(res[0].activity_desc)
            $('#number_participants').val(res[0].number_participants)
            $('#organizer_name').val(res[0].organizer_name)
            $('#start_date').val(res[0].startdate)
            $('#end_date').val(res[0].enddate)
            $('#start_time').val(res[0].start_time)
            $('#end_time').val(res[0].end_time)
            $('#eventstart_date').val(res[0].startdate)
            $('#eventend_date').val(res[0].enddate)
            $('#eventstart_time').val(res[0].start_time)
            $('#eventend_time').val(res[0].end_time)
            $('#res_id').val(res[0].id)
            $('#email').val(res[0].email)
            $('#transaction_id').val(res[0].transaction_id)
            $('#title').val(res[0].title)
            $('#desc').val(res[0].desc)
            $('#event_title').val(res[0].activity_title)
            // $('#event_date').val(res[0].startdate)
            // $('#event_time').val(res[0].start_time)
            $('#resources').val(res[0].resources)
            $('#admin_remarks').val(res[0].admin_remarks)
  }

  })
})

  $('.btn-update').click( e => {
      e.preventDefault();

      Swal.fire({
            title: 'Do you want to approve this activity?',
            showCancelButton: true,
            confirmButtonText: `Save`,
            }).then((result) => {

            if (result.isConfirmed) {
                var form = $('#form_update').serialize();

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
                                    title: 'Activity Updated!',
                                    text: 'Event Successfully Updated!',
                                    footer: '<h3><b><a href="dashboard">Close</a></b></h3>',
                                    showConfirmButton:false
                                    })

                                }
                            }

                        })
            } else {

            }
            })











  })
</script>
