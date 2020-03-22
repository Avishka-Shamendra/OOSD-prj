<?php
class statusCheck{
    public static function check($status){
        if (!isset($_GET[$status])) {
            exit();
        }else{
            $statusCheck = $_GET[$status];
            if ($statusCheck == "empty") {
              echo "<p class='error'>You did not fill in all information.</p>";
              exit();
            }elseif($statusCheck == "char"){
              echo "<p class='error'>You used invalid characters.</p>";
              exit();
            }elseif($statusCheck == "invalidemail"){
              echo "<p class='error'>You used invalid e-mail.</p>";
              exit();
            }elseif($statusCheck == "success"){
              echo "<p class='success'>Successful!</p>";
              exit();
            }
      }
    }
}