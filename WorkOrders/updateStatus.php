<?php
            $userID=$_POST['userID'];
            $orderID=$_POST['orderID'];
            $statusDescription=$_POST['statusDescription'];
            $username="root"; 
            $password="lininG"; 
            $database="SENIOR_PROJECT"; 
            $i=0;

                
                mysql_connect("localhost",$username,$password); 
                @mysql_select_db($database) or die( "Unable to select database"); 
                $query2="UPDATE WORK_ORDERS set statusDescription='$statusDescription' where userID=$userID and id=$orderID"; 
                $result2=mysql_query($query2); 
                mysql_close(); 
                
                mysql_connect("localhost",$username,$password); 
                @mysql_select_db($database) or die( "Unable to select database"); 
                $query3="Select id from WORK_ORDERS where statusDescription='$statusDescription'and userID=$userID and id=$orderID"; 
                $result3=mysql_query($query3); 
                $num3=mysql_numrows($result3); 
                mysql_close(); 

                if($num3==1){
                echo"
                    Update Successful
                ";
                }
?>
