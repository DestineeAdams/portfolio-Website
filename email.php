<?php

    // print_r($_POST['fname']);
    // print($_POST['Company']);
    // print($_POST['userEmail']);
    // print($_POST['subject']);
    // print($_POST['message']);


    $fullname = $_POST['fname'];
    $CompanyName = $_POST['Company'];
    $userEmail = $_POST['userEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    // if (preg_match("/@/", $userEmail) && preg_match("/(^[a-zA-Z0-9]@)|(^\w+[a-zA-Z0-9]@)/", $userEmail) && preg_match("/@[a-zA-Z0-9][.]|@\w+[a-zA-Z0-9][.]/", $userEmail) && preg_match("/[.][a-zA-Z0-9]$|[.]\w+[a-zA-Z0-9]$/", $userEmail)){

    // if( preg_match("/@/", $userEmail) && preg_match('/([A-Za-z0-9]+@)/', $userEmail) && preg_match('/(@+[A-Za-z0-9]+.)/', $userEmail) && preg_match('/\.+[A-Za-z0-9]+$)/', $userEmail) ) {

    if(true) {        
        echo "corret format";
       
        // read in email address from sensitiveInfo.txt

        $myfile = fopen("sensitiveInfo.txt", "r") or die("Unable to open file!");
        $to = fread($myfile,filesize("sensitiveInfo.txt"));
        fclose($myfile);
     
        // send to me
        $body = "";

        $body .=  "From".$fullname. "\r\n";
        $body .=  "".$userEmail. "\r\n";
        $body .=  "From".$message. "\r\n";

        mail($to, $subject, $body);


        // send to user
        $to = $userEmail;
        $body = "";

        $body .=  "Heelo, ".$fullname. "\r\n";
        $body .=  "thank you for the email. I will reply shortly" . "\r\n";
        $body .=  "this is and automic reply" . "\r\n";
        $body .=  "- Destinee Adams" . "\r\n";

        
        mail($to, "thank you", $body);

        echo "done";
    }

    else{

        echo "incorret format";
    }

?>