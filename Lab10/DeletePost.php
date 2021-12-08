<?php
   $mysqli = new mysqli("mysql.eecs.ku.edu", "p695k530", "Po9phuom", "p695k530");
   if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }
    $values = $_POST['userNames'];
    if(empty($values) == 0)
    {
      $size = count($values);
    }
    if(empty($values)){
       echo"You did not select any boxes!";
    }
    else{
       echo"The following are the deleted post Id's: ";
       for ($i = 0; $i < $size; $i++) {
         $query= "DELETE FROM Posts WHERE post_id='".$values[$i]."'";
         if($result = $mysqli->query($query))
         {
            echo $values[$i];
            echo"\n";
         }

       }
    }
    $mysqli->close();

?>