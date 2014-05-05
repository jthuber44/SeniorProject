<?php
        $buildingID=$_POST['buildingID'];
        $id=$_POST['id'];
        $admin=$_POST['admin'];
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        
                mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
            $query3="SELECT id, floorID FROM FLOOR Where buildingID='$buildingID'"; 
            $result3=mysql_query($query3); 
            $num3=mysql_numrows($result3);
              mysql_close(); 
?>


<style type="text/css">
    .imgClass { 
    background-image: url(floorPlaceholder.jpg);
    background-position:  0px 0px;
    background-repeat: no-repeat;
    background-size:contain;
    width: 400px;
    height: 400px;
    border: 0px;
    background-color: none;
    cursor: pointer;
    outline: 0;
}


.imgClass:active{
      background-position:  0px -3px;
}
      
    .imgClassFloor { 
    background-image: url(actualfloorplaceholder.jpg);
    background-position:  0px 0px;
    background-repeat: no-repeat;
    background-size:contain;
    width: 400px;
    height: 300px;
    border: 0px;
    background-color: none;
    cursor: pointer;
    outline: 0;
}


.imgClassFloor:active{
      background-position:  0px -3px;
}
</style>

<?php
if($admin==4)
{?>
             <form method="post" action="studentUser.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="Update" hidden="true">
                 <input type="text" value="1" name="box" hidden="true">
                 <input type="text" value="<?php echo "$admin"?>" name="admin" hidden="true">
                 <input type="text" value="<?php echo "$floorID"?>" name="floorID" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit" value=" " class="imgClass" height="400px"/>
                    </table>
                    </center>
                </form>

<?php
}?>