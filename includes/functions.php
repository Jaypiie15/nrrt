<?php
include 'config.php';

global $db;


function add_reservation() {

global $db;
include 'class/PHPMailerAutoload.php';


try {

    $email = $db->real_escape_string($_POST['email']);
    $division = $db->real_escape_string($_POST['division']);
    $name = $db->real_escape_string($_POST['name']);
    $number = $db->real_escape_string($_POST['number']);
    $title = $db->real_escape_string($_POST['title']);
    $description = $db->real_escape_string($_POST['description']);
    $mode = $db->real_escape_string($_POST['mode']);
    $meetingId = $db->real_escape_string($_POST['meetingid']);
    $startdate = $db->real_escape_string($_POST['startdate']);
    $enddate = $db->real_escape_string($_POST['enddate']);
    $starttime = $db->real_escape_string($_POST['starttime']);
    $endtime = $db->real_escape_string($_POST['endtime']); 
    $message = $db->real_escape_string($_POST['message']);
    $resources = implode(',', $_POST['devices']);
    $str = 'ABCDEFGHIJKLMNPQRSTUVWXYZ1234567890';
    // a-z 0-9 A-Z in above string
    // $shuffled = str_shuffle($str);
    // $transaction_id = substr($shuffled,1,6);
    $activity_status = 'Pending';
    $date_requested = date('m/d/y');

    $latest_fetch = $db->query("SELECT id, transaction_number FROM reservations ORDER BY id DESC LIMIT 1");
    while($row = $latest_fetch->fetch_object()) {
        $transaction = $row->transaction_number;
    }
    $transaction_id = $transaction + 1; 

    if(empty($email) || empty($division) || empty($name) || empty($number) || empty($title) || empty($title) || empty($description)){
                echo json_encode(array('message' => 'Input not complete'));die;
    }

        $mail = new PHPMailer();
        $mail->isSMTP();  
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );                                          // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'nmis.ictsd@gmail.com';                     // SMTP username
        $mail->Password   = 'M3@ts@f3ty';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;  
        $mail->isHTML(true);
        $mail->From = 'admin@noreply.com';  // This HAVE TO be your gmail adress

        $mail->FromName = 'NMIS RRT'; // This is the from name in the email, you can put anything you like here

        $mail->Subject = 'RRR No:'.$transaction_id. ' | '.$title. ' | '.$startdate. ' | '.$starttime;
        $mail->AddAddress('nmis.systems@gmail.com');

        $mail->Body = "<html>
        <head>
        <title></title>
        </head>
        <body>                
        <div style='width:800px;background:#fff;border-style:groove;'>
        <div style='width:100%;text-align:center;background:#292828'><a href='your website url'> <img 
        src=\"https://nmis.gov.ph/images/headers/header2020.png\" height=100 width=500;'></a></div>
        <hr width='100%' size='2' color='#4274e0'>
        <div style='width:50%;height:20px; text-align:right;margin-
        top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
        decoration:none;'> 
 
        <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
        left:390px;color:#B24909;'>NRRT Reservation</h2>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'> RRR No. : ". $transaction_id ." </div>
        <h4 style='color:#292828;margin-top:-20px;'> Hi Everyone,
        </h4>
        <p>
            Please be informed of the meeting details below. Date requested : <b>". date('m/d/y'). "</b>
            </p>
        <hr/>
        <div style='height:210px;'>
        <table cellspacing='0' width='100%' >
        <thead>
        <col width='80px' />
        <col width='40px' />
        <col width='40px' />
        <tr>          
        <th style='color:#0A903B;text-align:left;'>Organizer Info</th>
        <th style='color:#0A903B;text-align:left;'>Activity Details: </th>                                                                            
        </tr>
        </thead>
        <tbody>   
        <tr>

        <td style='text-align:left;'> Name : <b>" .$name."</b> <br> Email : <b>" .$email."</b> 
        <br>Contact Number : <b>" .$number."</b> <br>  Division : <b>" .$division."</b> </td>
        <td style='text-align:left;'><b>" .$title."</b> <br> Description : <b>" 
        .$description."</b> <br> Activity Mode : <b>".$mode." </b><br> Date : <b>" .$startdate." - " .$enddate." </b><br> Time : <b>" .$starttime." - " .$endtime."
        </b><br> Resources Needed: <b>" .$resources."</b></td>
        </tr>   
        <tr>
        </tbody> 
        </table>                        
            
        </div> 
        </div>              
        </body>
        </html>";

        if(!$mail->send()) {
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            die(json_encode(array('error'=> 1,'message' => $mail->ErrorInfo)));


            } else {	

                $query = $db->query("INSERT INTO reservations
                (email,division,organizer_name,contact_number,activity_title,activity_desc,activity_mode,activity_id,startdate,end_date,
                 start_time,end_time,resources,remarks,activity_status,transaction_number,date_requested) 

                 VALUES('$email','$division','$name','$number','$title','$description','$mode','$meetingId','$startdate','$enddate','$starttime',
                        '$endtime','$resources','$message','$activity_status','$transaction_id','$date_requested')");

                            echo json_encode(array('message' => 'Input Success','transaction_id' => $transaction_id));
            }

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

}

function fetch_events(){

    global $db;

    $fetch = $db->query("SELECT id,division,activity_title,activity_desc,organizer_name,
                         start_time,end_time,resources,venue,startdate,end_date 
                         FROM reservations WHERE activity_status = 'Approved'");
    $rows = array();
    while($r = $fetch->fetch_object()){
        $rows[] = array(
                                'id' => $r->id,
                                'title' => $r->activity_title,
                                'start' => date('Y-m-d',strtotime($r->startdate)),
                                'end' => date('Y-m-d',strtotime($r->end_date)),
                                'desc' => $r->activity_desc,
                                'name' => $r->organizer_name,
                                'division' => $r->division,
                                'startTime' => $r->start_time,
                                'endTime' => $r->end_time,
                                'venue' => $r->venue,
                                'resources' => $r->resources
        );
    }
    print json_encode($rows);
}

function fetch_request(){

    global $db;

    echo '                      
    <table class="table table-striped jambo_table bulk_action">
        <thead>
      <tr class="headings">

        <th class="column-title">RRR No. </th>
        <th class="column-title">Event Date </th>
        <th class="column-title">Event Name </th>
        <th class="column-title">Organizer Name </th>
        <th class="column-title">Status </th>
        <th class="column-title no-link last"><span class="nobr">Action</span>
        </th>
        <th class="bulk-actions" colspan="7">
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>

';

    $query = $db->query("SELECT id,startdate,start_time,activity_title,organizer_name,activity_status,transaction_number
                         FROM reservations WHERE activity_status != 'Approved' ORDER BY transaction_number DESC");

    while($row = $query->fetch_object()){

        $id = $row->id;
        $startdate = $row->startdate;
        $start_time = $row->start_time;
        $activity_title = $row->activity_title;
        $organizer_name = $row->organizer_name;
        $status = $row->activity_status;
        $meetingId = $row->transaction_number;

        switch($status){
            case 'Approved':
                $statu = '<span class="badge badge-success">Approved</span>';
            break;
            case 'Rescheduled':
                $statu = '<span class="badge badge-warning">Rescheduled</span>';
            break;

            case 'Cancelled':
                $statu = '<span class="badge badge-danger">Cancelled</span>';
            break;

            case 'Follow up':
                $statu = '<span class="badge badge-info">Follow up</span>';
            break;

            default :
            $statu = '<span class="badge badge-warning">Pending</span>';

            break;
        }

        echo 
    '<tbody>
        <tr class="even pointer">
        
          <td class=" ">'.$meetingId.'</td>
          <td class=" ">'. date('F j, Y',strtotime($startdate)). ' '.date('g:i a',strtotime($start_time)).'  </td>
          <td class=" ">'.$activity_title.' </td>
          <td class=" ">'.$organizer_name.' </td>
          <td class="">'.$statu.'</td>
          <td class=" last">
          <button type="submit" name="btn-edit" class="btn btn-info btn-sm btn-edits" value="'.$id.'"> <i class="fa fa-eye"></i> View</button>
          </td>
        </tr>
        </tbody>';

    }
echo  '</table>';

}

function edit_event(){

    global $db;

    $query = $db->query("SELECT id,email,activity_title,activity_desc,organizer_name,startdate,start_time,end_date,
                        end_time,venue,meeting_link,admin_remarks,activity_status,
                        transaction_number,resources FROM reservations WHERE id = ".$_COOKIE['res_id']);

                        $rows = array();
                        while($r = $query->fetch_object()){
                            $rows[] = array(
                                            'id' => $r->id,
                                            'email' => $r->email,
                                            'startdate' => $r->startdate,
                                            'start_time' => $r->start_time,
                                            'enddate' => $r->end_date,
                                            'end_time' => $r->end_time,
                                            'activity_title' => $r->activity_title,
                                            'activity_desc' => $r->activity_desc,
                                            'organizer_name'=> $r->organizer_name,
                                            'status' => $r->activity_status,
                                            'transaction_id' => $r->transaction_number,
                                            'title' => $r->activity_title,
                                            'desc' => $r->activity_desc,
                                            'resources' => $r->resources,
                                            'meeting_link' => $r->meeting_link,
                                            'admin_remarks' => $r->admin_remarks
                            );
                        }
                        print json_encode($rows);

                

            
    
}


function update_event(){

    global $db;
    include 'class/PHPMailerAutoload.php';

    try {

        $res_id = $db->real_escape_string($_POST['res_id']);
        $event_venue = $db->real_escape_string($_POST['event_venue']);
        $meeting_link = $db->real_escape_string($_POST['meeting_link']);
        $admin_remarks = $db->real_escape_string($_POST['admin_remarks']);
        $meeting_status = 'Approved';
        $email = $db->real_escape_string($_POST['email']);
        $title = $db->real_escape_string($_POST['event_title']);
        $startdate = $db->real_escape_string($_POST['start_date']);
        $starttime = $db->real_escape_string($_POST['start_time']);
        $enddate = $db->real_escape_string($_POST['end_date']);
        $endtime = $db->real_escape_string($_POST['end_time']);
        $desc = $db->real_escape_string($_POST['desc']);
        $resources = $db->real_escape_string($_POST['resources']);
        $resched = $db->real_escape_string($_POST['resched']);
        $transaction_id = $db->real_escape_string($_POST['transaction_id']);

        if(empty($res_id) || empty($event_venue) || empty($meeting_link) || empty($admin_remarks) || empty($meeting_status)){
            echo json_encode(array('message' => 'Input not complete'));die;
}

    $mail = new PHPMailer();
    $mail->isSMTP();  
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );                                          // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nmis.ictsd@gmail.com';                     // SMTP username
    $mail->Password   = 'M3@ts@f3ty';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;  
    $mail->isHTML(true);
    $mail->From = 'admin@noreply.com';  // This HAVE TO be your gmail adress

    $mail->FromName = 'NMIS RRT'; // This is the from name in the email, you can put anything you like here
    $mail->AddAddress($email);

    if($resched === '1'){
    $mail->Subject = '[RESCHEDULED] RRR No:'.$transaction_id. ' | '.$title. ' | '.$startdate. ' | '.$starttime;
    $mail->Body = "<html>
    <head>
    <title></title>
    </head>
    <body>                
    <div style='width:800px;background:#fff;border-style:groove;'>
    <div style='width:100%;text-align:center;background:#292828'><a href='your website url'> <img 
    src=\"https://nmis.gov.ph/images/headers/header2020.png\" height=100 width=500;'></a></div>
    <hr width='100%' size='2' color='#4274e0'>
    <div style='width:50%;height:20px; text-align:right;margin-
    top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
    decoration:none;'> 

    <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
    left:390px;color:#B24909;'>NRRT Reservation</h2>
    <div style='width:50%;text-align:right;margin:0px;padding-
    left:390px;color:#0A903B'><b> [RESCHEDULED] RRR No. : ". $transaction_id ."</b> </div>
    <h4 style='color:#292828;margin-top:-20px;'> Good day,
    </h4>
    <p>
    Your meeting is now <b style='color:#0a98af'>RESCHEDULED</b> with the following details: <br><br>

     Topic : <b>".$title."</b><br>
       Venue : <b>".$event_venue."</b><br>
        ICT Resources : <b>".$resources. "</b>.<br><br>
       RRR Team Remarks : <br>
       Meeting Link : <a href='".$meeting_link."'>".$meeting_link."</a>.<br>
       <b>".$admin_remarks."</b>.<br><br>
       May we request you to please join the meeting room 5-10 minutes before the scheduled time.
        <br><br>
     Click <a href='bit.ly/NMISRRT'>here</a> to view the calendar.<br><br>
        Thank You!<br><br> -- <br><br>
        <b>NMIS RRR Team</b><br>
            National Meat Inspection Service<br>
            4 Visayas Ave., Diliman, Quezon City <br>
            Tel. No. (02)8924-7980 local 207<br><br>
       </p>
    <hr/>
                       
        
    </div>              
    </body>
    </html>";

    }
    else{

    $mail->Subject = 'RRR No:'.$transaction_id. ' | '.$title. ' | '.$startdate. ' | '.$starttime;

    $mail->Body = "<html>
    <head>
    <title></title>
    </head>
    <body>                
    <div style='width:800px;background:#fff;border-style:groove;'>
    <div style='width:100%;text-align:center;background:#292828'><a href='your website url'> <img 
    src=\"https://nmis.gov.ph/images/headers/header2020.png\" height=100 width=500;'></a></div>
    <hr width='100%' size='2' color='#4274e0'>
    <div style='width:50%;height:20px; text-align:right;margin-
    top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
    decoration:none;'> 

    <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
    left:390px;color:#B24909;'>NRRT Reservation</h2>
    <div style='width:50%;text-align:right;margin:0px;padding-
    left:390px;color:#0A903B'><b> RRR No. : ". $transaction_id ."</b> </div>
    <h4 style='color:#292828;margin-top:-20px;'> Good day,
    </h4>
    <p>
    Your meeting is now <b style='color:#028449'>CONFIRMED</b> with the following details: <br><br>

     Topic : <b>".$title."</b><br>
     Venue : <b>".$event_venue."</b><br>
     ICT Resources : <b>".$resources. "</b>.<br><br>

    RRR Team Remarks : <br>
    Meeting Link : <a href='".$meeting_link."'>".$meeting_link."</a>.<br>
    <b>".$admin_remarks."</b>.<br><br>
    May we request you to please join the meeting room 5-10 minutes before the scheduled time.
     <br><br>
     Click <a href='bit.ly/NMISRRT'>here</a> to view the calendar.<br><br>
     Thank You!<br><br> -- <br><br>
     <b>NMIS RRR Team</b><br>
         National Meat Inspection Service<br>
         4 Visayas Ave., Diliman, Quezon City <br>
         Tel. No. (02)8924-7980 local 207<br><br>
    </p>
    <hr/>
                       
        
    </div>              
    </body>
    </html>";
}


    if(!$mail->send()) {
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
        die(json_encode(array('error'=> 1,'message' => $mail->ErrorInfo)));

        } else {	

        $query = $db->query("UPDATE reservations SET venue = '$event_venue', meeting_link = '$meeting_link',
                            admin_remarks = '$admin_remarks', activity_status = '$meeting_status',
                            startdate = '$startdate', end_date = '$enddate', start_time = '$starttime',
                            end_time = '$endtime' WHERE id = '$res_id' ");
                            echo json_encode(array('message' => 'Update Success'));
        }
        

    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

}

function counting(){

    global $db;

    $z = $db->query("SELECT activity_status FROM reservations WHERE activity_status = 'Pending'");
	$zz= $z->num_rows;
	$zzz = $zz;
	$zzzz = $zzz;
    $pending_count = number_format($zzzz, 0, '.' ,',');

    $a = $db->query("SELECT activity_status FROM reservations WHERE activity_status = 'Follow up'");
	$aa= $a->num_rows;
	$aaa = $aa;
	$aaaa = $aaa;
    $follow_count = number_format($aaaa, 0, '.' ,',');

    $b = $db->query("SELECT activity_status FROM reservations WHERE activity_status = 'Approved'");
	$bb=$b->num_rows;
	$bbb = $bb;
	$bbbb = $bbb;
    $approved_count = number_format($bbbb, 0, '.' ,',');

    $c = $db->query("SELECT activity_status FROM reservations WHERE activity_status = 'Cancelled'");
	$cc= $c->num_rows;
	$ccc = $cc;
	$cccc = $ccc;
    $cancelled_count = number_format($cccc, 0, '.' ,',');

    $d = $db->query("SELECT activity_status FROM reservations WHERE activity_status = 'Rescheduled'");
	$dd=$d->num_rows;
	$ddd = $dd;
	$dddd = $ddd;
    $resched_count = number_format($dddd, 0, '.' ,',');

    $e = $db->query("SELECT activity_status FROM reservations");
	$ee=$e->num_rows;
	$eee = $ee;
	$eeee = $eee;
    $total = number_format($eeee, 0, '.' ,',');

    $rows = array();
                            $rows[] = array(
                                            'pending' => $pending_count,
                                            'follow' => $follow_count,
                                            'approved' => $approved_count,
                                            'cancelled' => $cancelled_count,
                                            'rescheduled' => $resched_count,
                                            'total' => $total
                            );
                        print json_encode($rows);
}


?>
