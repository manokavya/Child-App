
<?php
  //create connection
  $conn =  mysqli_connect("localhost","root","","cl");
  //check connection
  if($conn)
  {

    $Name = $_POST["signupid"];
    $cNAME=$_POST["signupid1"];
    $Email=$_POST["signupmail"];
    $Contact=$_POST["signupnum"];
    $Pwd = $_POST["loginpsw"];
  $select = mysqli_query($conn,"INSERT INTO name(Name,cNAME,Email,Contact,Pwd) VALUES ('$Name','$cNAME','$Email','$Contact','$Pwd')");
  

   if($select)
   {
    header("Location: index.html");
   }
 }

?>