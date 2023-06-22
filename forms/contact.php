<?php
 if(isset($_POST['sumbit'])){
    $name= $_POST['name'];
    $subject= $_POST['name'];
    $mailFrom= $_POST['name'];
    $message= $_POST['name'];
    


    $mailTo="consulting@maqnamarine.com0";
    $headers= "From: " .$mailFrom;
    $txt= "You have received an enquiry from ".$name.".\n\n".$message;



    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mailsend");











 }
