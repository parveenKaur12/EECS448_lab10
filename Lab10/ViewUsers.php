<?php
   $mysqli = new mysqli("mysql.eecs.ku.edu", "p695k530", "Po9phuom", "p695k530");

/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
  }
  echo"<table border = \"1\" style = 'border-collapse: collapse'>";
  $query = "SELECT * FROM Users"; 
  echo"Users: ";
  if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      echo("<tr><td>".$row['user_id']."</td></tr>");  
    }
  }
/* free result set */
    $result->free();
    $mysqli->close();
    ?>