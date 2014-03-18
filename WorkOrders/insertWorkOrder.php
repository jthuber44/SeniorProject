<?php
        $zone=$_POST['zone'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $buildingID=$_POST['buildingID'];
        $roomID=$_POST['roomID'];
        $floorID=$_POST['floorID'];
        $id=$_POST['id'];
        $name=$_POST['name'];
        
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        $i=0;
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query="Insert into WORK_ORDERS(title, description, dateTime, userID, buildingID, floorID, roomID, Zone) values('$title', '$description', NOW(), '$id', '$buildingID', '$floorID', '$roomID', '$zone')"; 
        $result=mysql_query($query); 
        mysql_close(); 
        
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

?>

