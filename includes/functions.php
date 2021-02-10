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
        $mail->Password   = '';                               // SMTP password
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
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo json_encode(array('message' => $mail->ErrorInfo));

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






?>
