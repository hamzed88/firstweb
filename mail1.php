<?php 
//Variables. 
$user_fname = $_REQUEST['Username'];
//$user_lname = $_REQUEST['last_name'];
//$user_phone = $_REQUEST['phone']; 
$user_email = $_REQUEST['Email']; 
//$user_service = $_REQUEST['service'];
//$user_subject = $_REQUEST['subject'];  
$user_message = $_REQUEST['Comments']; 
$user_send = $_REQUEST['send']; 
$user_check = stripos("$user_email","@"); 
$headers = "From: $user_email" . "\r\n" .
"CC: hamzed88@gmail.com";
$subject = "Enquiry from $user_fname ";
//Body of the email to be sent. 
$body_mail = " 
First Name: $user_fname
Email: $user_email 
Comments: $user_message";   

//Body of the Email for the user requesting a copy. 
$body_email = " 
Thank you for contacting Xperts Pest Control Services. We will contact you very soon.


Regards,
Xpertspestcontrols"; 
//Check if the user submited the data require. 
//If the @ is measing from the email address stop the user for continuing. 
if ($user_check) { 
echo ""; 
} 
else { 
echo "You can't continue with out a email address, Please enter a email address."; 
   exit ($user_check); 
} 
if (empty($user_fname)) { 
echo "<center><h2><font color='ff0000'>ERROR</font></h2></center>You didn't enter a your first name.<br>"; 
   exit(); 
} 
//Everything okay? send the e-mail.      
else { 
mail('info@hamzed88l.com',"$subject","$body_mail",$headers); 
	header('Location: http://www.xpertspestcontrol.com/thanku.php'); 
} 

//If the checkbox if check send a copy to the user. 
if (isset($user_send)) { 
@mail("$user_email","Auto Reply from Xperts Pest Control","$body_email","from:info@hamzed88.com"); 
  
} 
else { 
     die($user_send); 
} 
?> 