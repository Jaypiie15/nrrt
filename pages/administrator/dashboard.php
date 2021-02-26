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
                        <div class="count pending_count"></div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-arrow-circle-up"></i> Follow up</span>
                        <div class="count followup_count"></div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-check-circle"></i> Approved</span>
                        <div class="count approved_count"></div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-times"></i> Cancelled</span>
                        <div class="count cancelled_count"></div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-calendar"></i> Rescheduled</span>
                        <div class="count rescheduled_count"></div>
                      </div>
                      <div class="col-md-2 col-sm-4  tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total</span>
                        <div class="count green total_count"></div>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class='calendar-parent col-md-6' style="height:730px">
                  <div class="calendar_loader" style="display:none;">
                      <div class="wrapper">
                        <div class="wrapper-cell">
                          <div class="text">
                            <div class="text-line"> </div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                            <div class="text-line"></div>
                          </div>
                        </div>
                      </div>
                      </div>
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
                      <div id="reservations"></div>
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
                  <label class="col-sm-3 control-label">Event Mode</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control event_mode" id="event_mode" name="event_mode" disabled>
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

<?php include 'pages/administrator/includes/footer.php';?>
<script>
    $(function() {

      fetch_request();
      counting();

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
          beforeSend: function () {

            $('.calendar_loader').show();
                
            },
            success : function(res){

            $('.calendar_loader').hide();
            
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
             $('.event_mode').addClass('event-mode-'+calEvent.id);

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
              $('.event-mode-'+v.id).val(v.mode);

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
                $('.event_mode').removeClass('event-mode-'+calEvent.id);
              })


            calendar.fullCalendar('unselect');
   

          })


        },
        events : res
        });

          }
      })
   
function fetch_request (){
  
      $.ajax({
          type : 'POST',
          url : 'redirect',
          data : {function : 'fetch_request'},
          success : function(res){
            $("#reservations").append(res); 

            $('.btn-edits').on('click',function() {
                // sessionStorage.setItem("res_id",$(this).val());
                document.cookie = "res_id="+$(this).val();"path=/";
                window.location = "edit-event";
                // $.ajax({
                //     type : 'POST',
                //     url : 'redirect',
                //     data : { function : 'edit-event', res_id : $(this).val() },
                //     success : function(response){
                //        console.log(response)
                //     }
                // })
      })

          }
      })
    }

    function counting(){

      $.ajax({
          type : 'POST',
          url : 'redirect',
          dataType :'json',
          data : {function : 'counting'},
          success : function(res){
            // console.log(res)
            $('.pending_count').text(res[0].pending)
            $('.followup_count').text(res[0].follow)
            $('.approved_count').text(res[0].approved)
            $('.cancelled_count').text(res[0].cancelled)
            $('.rescheduled_count').text(res[0].rescheduled)
            $('.total_count').text(res[0].total)


    }
    



    })
  }

})

    </script>