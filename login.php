<?php
        $email = $_POST['loginid'];
        $Pwd = $_POST['loginpsw'];        
        $Conn = mysqli_connect("localhost","root","","cl");
    
        $select =mysqli_query($Conn,"SELECT * from `name` where  `Email`='$email' and `Pwd`='$Pwd'");
        if($select)
        {
        while($row=mysqli_fetch_assoc($select)){
            echo "<br><br><br><br><br><br> <center><h1> Welcome" .$row['cName']."</h1></center>"; 
            header("Location: index.html");}
        }
            else
            {
                echo "Account does not exists!!!";
            }
        mysqli_close($Conn);
    ?>
