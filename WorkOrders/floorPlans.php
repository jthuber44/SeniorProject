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
            
              $query4="SELECT id FROM ROOM Where buildingID='$buildingID'"; 
            $result4=mysql_query($query4); 
            $num4=mysql_numrows($result4);
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
if($admin==0)
{?>
             <form method="post" action="studentUser.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="Update" hidden="true">
                 <input type="text" value="<?php echo "$admin"?>" name="admin" hidden="true">
                 <input type="text" value="0" name="floorID" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit" value="1" name="box" class="imgClass" height="400px"/>
                    </table>
                    </center>
                </form>

<?php
}?>


                               <script>
                                   function toggle_visibility(id) {
                                       var e = document.getElementById(id);
                                          e.style.display = 'block';
                                   }
                                   function toggle_visibilitybutton(id) {
                                       var e = document.getElementById(id);
                                          e.style.display = 'none';
                                   }
                               </script>



<?php
if($admin==1)
{?>
    
             <form method="post" action="adminUser.php">
                 <div id="floor" style="float:right; display:block">
                     
                 <b>Select Floor:</b>
                 <select name="floorID">
                     
                     <?php
                     $k=0;
                     while ($k < $num3) {
                         $floorid=mysql_result($result3,$k,"floorID"); 
                         echo "<option value='$floorid'>$floorid"; 
                         $k++;
                      } 
                      ?> 
                 </select>
                 <input type='button' value="Room" onclick="toggle_visibility('roominfo');">

                 </div>
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="Update" hidden="true">
                 <input type="text" value="<?php echo "$admin"?>" name="admin" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit" value="1" name="box" class="imgClassFloor" height="400px"/>
                    </table>
                    </center>
                </form>

<form method="post" action="adminUser.php">
<div id="roominfo"style="float:right; display:none">
                 <br>
                 <b>Select Floor:</b>
                 <select name="floorID">
                     
                     <?php
                     $k=0;
                     while ($k < $num3) {
                         $floorid=mysql_result($result3,$k,"floorID"); 
                         echo "<option value='$floorid'>$floorid"; 
                         $k++;
                      } 
                      ?> 
                 </select>
                 
                 <b>Select Room:</b>
                 <select name="roomID">
                     <?php
                     $m=0;
                     while ($m < $num4) {
                         $roomid=mysql_result($result4,$m,"id"); 
                         echo "<option value='$roomid'>$roomid"; 
                         $m++;
                      } 
                      ?> 
                 </select>
                 <input type="text" value="2" name="Update" hidden="true">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="4" name="admin" hidden="true">
            <button id="roombutton" type="submit"  >Select Room</button>
                 </div>
</form>


<?php
}?>
 

