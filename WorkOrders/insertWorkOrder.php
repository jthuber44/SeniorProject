<?php
        $zone=$_POST['zone'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $buildingID=$_POST['buildingID'];
        $roomID=$_POST['roomID'];
        $floorID=$_POST['floorID'];
        $id=$_POST['id'];
        $name=$_POST['name'];
        $admin=$_POST['admin'];
        
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        $i=0;
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query="Insert into WORK_ORDERS(title, description, dateTime, userID, buildingID, floorID, roomID, Zone, isActive) values('$title', '$description', NOW(), '$id', '$buildingID', '$floorID', '$roomID', '$zone', 1)"; 
        $result=mysql_query($query); 
        mysql_close(); 
        
        if($admin==0)
            {
                echo"
                     <form method='post' id='student' action='studentUser.php'>
                     <input type='number' name='id' value='$id' hidden='true'/>
                     <input type='text' name='name' value='$name' hidden='true'/>
                     <input type='number' name='buildingID' value='$buildingID' hidden='true'/>
                     <input type='number' name='roomID' value='$roomID' hidden='true'/>
                     <input type='number' name='admin' value='$admin' hidden='true'/>
                     <input type='text' value='0' name='Update' hidden='true'/>
                     </form>
                     <script type='text/javascript'> 
                     document.getElementById('student').submit();
                     </script>         
                ";
            }
        if($admin==1)
        {
                echo"
                     <form method='post' id='admin' action='adminUser.php'>
                     <input type='number' name='id' value='$id' hidden='true'/>
                     <input type='text' value='0' name='Update' hidden='true'/>
                     <input type='text' name='name' value='$name' hidden='true'/>
                     <input type='number' name='buildingID' value='$buildingID' hidden='true'/>
                     <input type='number' name='roomID' value='$roomID' hidden='true'/>
                     <input type='number' name='admin' value='$admin' hidden='true'/>
                     </form>
                     <script type='text/javascript'> 
                     document.getElementById('admin').submit();
                     </script>         
                ";            
        }
        
        if($admin==2)
        {
                     $name=$name;
                     $id=$id;
                     $buildingName=$_POST['buildingName'];
                     echo"
                     <form method='post' id='operations' action='operationsUser.php?workOrderBuilding=1&update=1&name=$name&id=$id&buildingName=$buildingName&workOrders=1'>
                     </form>
                     <script type='text/javascript'> 
                     document.getElementById('operations').submit();
                     </script>         
                ";
            
        }
        if($admin==4)
        {
            $admin=1;
                echo" 
                     <form method='post' id='admin' action='adminUser.php'>
                     <input type='number' name='id' value='$id' hidden='false'/>
                     <input type='text' value='0' name='Update' hidden='false'/>
                     <input type='text' name='name' value='$name' hidden='false'/>
                     <input type='number' name='buildingID' value='$buildingID' hidden='false'/>
                     <input type='number' name='roomID' value='$roomID' hidden='false'/>
                     <input type='number' name='admin' value='$admin' hidden='false'/>
                     </form>
                     <script type='text/javascript'> 
                     document.getElementById('admin').submit();
                     </script>         
                ";            
        }
?>

