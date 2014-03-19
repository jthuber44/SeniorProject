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
                    if($num==0)
            {
                echo "  <!DOCTYPE html>
                <html>
                    <head>
                        <title>Benedictine College Work Orders</title>
                        <style type='text/css'>
                            body{
                                margin:0;
                                padding:0;
                                line-height: 1.5em;
                            }

                            b{font-size: 110%;}
                            em{color: red;}
                            #topsection{
                                background: #EAEAEA;
                                height: 90px; 
                            }

                            #topsection h1{
                                margin: 0;
                                padding-top: 15px;
                            }

                            #contentcolumn{
                                margin-left: 200px; 
                            }

                            #leftcolumn{
                                float: left;
                                width: 300px; 
                                height: 800px;
                                margin-left: -100%;
                                background: #C8FC98;
                            }

                            #footer{
                                clear: left;
                                width: 100%;
                                background: black;
                                color: #FFF;
                                text-align: center;
                                padding: 4px 0;
                                position: absolute;
                                bottom: 0px;
                            }

                            #footer a{
                                color: #FFFF80;
                            }
                        </style>
                    </head>
                    <body>
                        <div id='maincontainer'>
                            <div id='topsection'>
                                 <table style='width:1050px'>
                                    <tr>
                                      <td><img src='logo.png' alt='Benedictine College'></td>
                                      <td><h1>Work Order Site</h1></td>
                                      </tr>
                                    </table>
                            </div>
                            </div>
                                <?php
                                ?>
                                <form method='post' action='sortUser.php'>
                                    <center>
                                        <b>Please Login Again</b>
                                    <table style='width:300px'>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type='text' size='30' name='email'/> <br></td>
                                        </tr>
                                        <tr>
                                          <td>Password:</td>
                                          <td><input type='password' size='30' name='password'/><br></td>
                                        </tr>
                                    </table>
                                    <input type='submit' value='Login'>
                                    </center>
                                </form>
                            <div id='footer'>Work Order Senior Project 2014</div>
                            <center><b>Invalid Username or Password</b></center>
                    </body>
                </html>

                 ";
            }
        }
?>