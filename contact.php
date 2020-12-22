<?php
    if(isset($_POST['send'])){
        $Name = $_POST['name'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $Msg = $_POST['msg'];
        $Message = "Please Fill up the Blanks";
        
        if(empty($Name) || empty($Phone) || empty($Email) || empty($Msg)){
            include('contact.html');
            echo '<script> alert ("PLease Fill up the Blanks")</script>';  
        } else {
            include('index.html');
            echo '<script> alert ("Submitted Successfuly")</script>';
            $to = "Alamat101@gmail.com";
        }
    }
?>
