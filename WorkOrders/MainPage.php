<?php
    $email=$_POST['email'];
    $userpassword=$_POST['password'];
    if($email==NULL||$userpassword==NULL)
        {
            echo "   <form method='post' action='MainPage.php'> 
            Invalid Email or Password.<br>
            Email:    <input type='text' size='30' name='email'/> <br>
            Password: <input type='password' size='30' name='password'/><br>
            <input type='submit' value='Login'> 
            </form> "; 
        }
        else{
            $username="root"; 
            $password="lininG"; 
            $database="SENIOR_PROJECT"; 
            $i=0;
            mysql_connect("localhost",$username,$password); 
            @mysql_select_db($database) or die( "Unable to select database"); 
            $query="SELECT id, name FROM USER Where emailAddress='$email' and password='$userpassword'"; 
            $result=mysql_query($query); 
            $num=mysql_numrows($result); 
            mysql_close(); 

            $id=mysql_result($result,$i,"id");
            mysql_connect("localhost",$username,$password); 
            @mysql_select_db($database) or die( "Unable to select database"); 
            $query1="SELECT id, title, dateTime FROM WORK_ORDERS Where userID='$id'"; 
            $result1=mysql_query($query1); 
            mysql_close(); 
                    $workOrderID=mysql_result($result1,$i,"id");
                    $workOrderTitle=mysql_result($result1,$i,"title");
                    $workOrderDateTime=mysql_result($result1,$i,"dateTime");

       // mysql_connect("localhost",$username,$password); 
        //@mysql_select_db($database) or die( "Unable to select database"); 
        //$query2="SELECT buildingID, roomID FROM Student Where id='$id'"; 
        //$result2=mysql_query($query2); 
        //$num2=mysql_numrows($result2); 
        //mysql_close(); 
        
      //  if($num2==0)
        //{
          //          mysql_connect("localhost",$username,$password); 
            //        @mysql_select_db($database) or die( "Unable to select database"); 
              //      $query2="SELECT buildingID, floorID, roomID FROM Admin Where id='$id'"; 
                //    $result2=mysql_query($query2); 
                  //  $num2=mysql_numrows($result2); 
                    //mysql_close(); 
                    
                    
        //}
                if($num==1){
                $name=mysql_result($result,$i,"name");
                    if($name!=Null){
                        echo "
                            <h1>$name</h1>
                            <h3>Recent WorkOrders</h3>
                            <form method='post' action='p1.php'> 
                            <select name='ssn'> 
                            <option value=",$workOrderID,">",$workOrderTitle," ", $workOrderDateTime,"\n'
                            </select> 
                            <input type='submit' value='View'> 
                            </form> ";
                        $i++;
                        
                    }
                }
        if($num==0){
            echo "   <form method='post' action='MainPage.php'>
                Invalid Email or Password.<br>
                Email:    <input type='text' size='30' name='email'/> <br>
                Password: <input type='password' size='30' name='password'/><br>
                <input type='submit' value='Login'> 
                </form> ";
        }
}
?>
