
<?php
  //create connection
  $conn =  mysqli_connect("localhost","root","","cl");
  if($conn)
  {
    $jname1=$_POST["joinername"];
    $jmail1=$_POST["joinermail"];
    $select=mysqli_query($conn,"INSERT INTO newjoin(Joinername,Joinermail)VALUES('$jname1','$jmail1');");
    if($select)
    {
      header("Location: index.html");

    }
    else  {
      echo "no";    }
  }
?>