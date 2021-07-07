<?php      
          if(isset($_POST['submit'])){
              $name = $_POST['name'];
              $mailForm = $_POST['email'];
              $message = $_POST['message'];

              $mailTo = "aminetour2901@gmail.com";
              $headers = "From: ".$mailForm;
              $txt = "You have a message ".$name."\n\n".$message;

              mail($mailTo, $name, $txt, $headers);

              header("Location: index.html?MessageSent");
          }
          ?>
