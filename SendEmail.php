<html>
<body>

  <?php
    if (empty ($_POST["mailsubject"]) ){
       $mailsubject=" " ;
    }

    if (empty ($_POST["mailbody"]) ) {
       $mailbody=" " ; 
    }

    $result = mail ("maria.medina.aiesec@gmail.com", $_POST["mailsubject"], $_POST["mailbody"]) ;

    if ($result) {
       echo "Email sent successfully!" ;
    }else{
       echo "Email could not be sent." ;
    }
?>
</body>
</html> 
