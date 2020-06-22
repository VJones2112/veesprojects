<?php ob_start();
//Put below next to <?php to allow redirect to header line 23



if(isset($_POST['submit'])) {
    
//    echo "IT WORKS";
    
    $to = "veronicajones2112@gmail.com";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " .$email . "\r\n". 
//        "CC: somebodyelse@example.com";
    
    
    
    
    mail($to, $subject, $message, $headers);
    
    
    header("Location: contact.html")
}

?>
