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
        $query="SELECT name FROM USER Where emailAddress='$email' and password='$userpassword'"; 
        $result=mysql_query($query); 
        $num=mysql_numrows($result); 
        mysql_close(); 
        
        
        if($num==1){
        $name=mysql_result($result,$i,"name");
        if($name!=Null){
            echo "Name: $name";
        }
       }
        
        if($num==0)
        {
            echo "   <form method='post' action='MainPage.php'> 
                    Invalid Email or Password.<br>
                    Email:    <input type='text' size='30' name='email'/> <br>
                    Password: <input type='password' size='30' name='password'/><br>
                    <input type='submit' value='Login'> 
                    </form> ";
        }
        }
        
?>
