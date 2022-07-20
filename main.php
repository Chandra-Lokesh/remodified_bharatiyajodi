<?php

$name = $_POST['name'];
$dob = $_POST['dob'];
$tob = $_POST['tob'];
$pob = $_POST['pob'];
$edu = $_POST['edu'];
$rel = $_POST['rel'];
$lang = $_POST['lang'];
$occ = $_POST['occ'];
$mar_stat = $_POST['mar_stat'];
$fa_name = $_POST['fa_name'];
$mo_name = $_POST['mo_name'];
$sib_no = $_POST['sib_no'];
$bro_names = $_POST['bro_names'];
$sis_names = $_POST['sis_names'];
$b_struct = $_POST['b_struct'];
$skin_comp = $_POST['skin_comp'];
$ht = $_POST['ht'];
$wt = $_POST['wt'];
$kun = $_POST['kun'];
$sal = $_POST['sal'];
$sim_mul = $_POST['sim_mul'];
$add_photo = $_POST['add_photo'];
$photo = $_POST['photo'];
$hob = $_POST['hob'];
$ph_num = $_POST['ph_num'];
$what_num = $_POST['what_num'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$fac_inst_id = $_POST['fac_inst_id'];
$rel_pref = $_POST['rel_pref'];
$age_pref = $_POST['age_pref'];
$skcomp_pref = $_POST['skcomp_pref'];
$occ_pref = $_POST['occ_pref'];
$loc_pref = $_POST['loc_pref'];



// RECEIVER'S MAIL_ID
$to = "20r11a05d8@gcet.edu.in";

// SUBJECT
$subject = "Mail From Bharatiya Jodi(New Registration)";

// MESSAGE
$message = 

"\r\n<------------ REGISTRATION FORM ------------>\r\n\r\n --- Personal Details: --- \r\n\r\n Name = "
.$name.
"\r\n Date of Birth: = "
.$dob.
"\r\n Time of Birth = "
.$tob.
"\r\n Place of Birth = "
.$pob.
"\r\n Education = "
.$edu.
"\r\n Religion = "
.$rel.
"\r\n Family Language = "
.$lang.
"\r\n Job/Occupation  = "
.$occ.
"\r\n\r\n--- Family Details: --- \r\n\r\n Father Name = "
.$fa_name.
"\r\n Mother Name = "
.$mo_name.
"\r\n Number of Siblings = "
.$sib_no.
"\r\n Brother's Names = "
.$bro_names.
"\r\n Sister's Names = "
.$sis_names.
"\r\n\r\n---  Physical Structure: --- \r\n\r\n Body Structure = "
.$b_struct.
"\r\n Skin Complexion = "
.$skin_comp.
"\r\n Height = "
.$ht.
"\r\n Weight = "
.$wt.
"\r\n\r\n--- Other Details: ---\r\n\r\n Kundali = "
.$kun.
"\r\n Salary = "
.$sal.
"\r\n Simple/Multiple Photo = "
.$sim_mul.
"\r\n Does he want to add photo = "
.$add_photo.
"\r\n Photo = "
.$photo.
"\r\n Hobbies = "
.$hob.
"\r\n\r\n--- Contact Details: ---\r\n\r\n Contact Number = "
.$ph_num.
"\r\n Whatsapp Number = "
.$what_num.
"\r\n Email = "
.$email.
"\r\n Address = "
.$address.
"\r\n State = "
.$state.
"\r\n City = "
.$city.
"\r\n Pincode = "
.$pincode.
"\r\n Facebook/Instagram ID = "
.$fac_inst_id.
"\r\n\r\n--- Spouse(Preference) ---\r\n\r\n Religion Preference = "
.$rel_pref.
"\r\n Age Preference = "
.$age_pref.
"\r\n Skin Complexion Preference = "
.$skcomp_pref.
"\r\n Occupation Preference = "
.$occ_pref.
"\r\n Location Preference = "
.$loc_pref;



if(mail($to,$subject,$message))
echo "<h1 style='text-align:center;margin-top:20vh;'>Successfully Submitted ! </h1>";
else 
echo "<h1 style='text-align:center;margin-top:20vh;'>Unsuccesfull Submission, Please try again Later !</h1>";

?>