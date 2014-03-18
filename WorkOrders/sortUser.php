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

            if($num==1)
            {
                $id=mysql_result($result,$i,"id");
                $name=mysql_result($result,$i,"name");
                
                mysql_connect("localhost",$username,$password); 
                @mysql_select_db($database) or die( "Unable to select database"); 
                $query2="SELECT buildingID, roomID FROM STUDENT Where id='$id'"; 
                $result2=mysql_query($query2); 
                $num2=mysql_numrows($result2); 
                mysql_close(); 
                $buildingID=mysql_result($result2,$i,"buildingID");
                $roomID=mysql_result($result2,$i,"roomID");
                echo"
                    <form method='post' id='student' action='studentUser.php'>
                    <input type='number' name='id' value='$id'/>
                    <input type='text' name='name' value='$name'/>
                    <input type='number' name='buildingID' value='$buildingID'/>
                    <input type='number' name='roomID' value='$roomID'/>
                    </form>
                    <script type='text/javascript'>
                    document.getElementById('student').submit();
                    </script>
                ";

                if($num2==0)
                {
                    mysql_connect("localhost",$username,$password); 
                    @mysql_select_db($database) or die( "Unable to select database"); 
                    $query3="SELECT buildingID, floorID, roomID FROM Admin Where id='$id'"; 
                    $result3=mysql_query($query3); 
                    $num3=mysql_numrows($result3); 
                    mysql_close(); 
                    
                    echo"
                    <form method='post' id='admin' action='adminUser.php'>
                    <input type='text' name='id' value='$id'/>
                    </form>
                    <script type='text/javascript'>
                    document.getElementById('admin').submit();
                    </script>
                    ";
                            
                    if($num3==0)
                    {
                        mysql_connect("localhost",$username,$password); 
                        @mysql_select_db($database) or die( "Unable to select database"); 
                        $query3="SELECT staffID FROM OPERATIONS Where id='$id'"; 
                        $result3=mysql_query($query3); 
                        $num3=mysql_numrows($result3); 
                        mysql_close(); 
                    }

                }
                
            }
        }
?>