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

<?php
if($admin==0)
{?>
             <form method="post" action="studentUser.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="Update" hidden="true">
                 <input type="text" value="1" name="box" hidden="true">
                 <input type="text" value="<?php echo "$admin"?>" name="admin" hidden="true">
                 <input type="text" value="0" name="floorID" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit"  value=" " class="imgClass" height="400px"/>
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
             <div id="hiddme" style="display:block">
             <form method="post" action="adminUser.php">
                 
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="Update" hidden="true">
                 <input type="text" value="1" name="box" hidden="true">
                 <input type="text" value="<?php echo "$admin"?>" name="admin" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit" value=" " class="imgClassFloor" height="100px"/>
                        </tr>
                        <tr>
                            <div id="floor" display:block">
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
                 <br>
                 <input type='button' value="Select Floor" 
                        onclick="toggle_visibility('roominfo');toggle_visibilitybutton('hiddme');">

                 </div>
                        </tr>
                    </table>
                    </center>
                </form>
     </div>
<form method="post" action="adminUser.php">
    <center>
<div id="roominfo" style="display:none">
    <div id="floor" display:block">
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
                 <br>
                 <input type='button' value="Select Floor" 
                        onclick="toggle_visibility('roominfo');toggle_visibilitybutton('hiddme');">

                 </div>
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
                 <br>
            <button id="roombutton" type="submit"  >Select Room</button>
            <br>
            <input type='button' value="Cancel" onclick="toggle_visibility('hiddme');toggle_visibilitybutton('roominfo');">
                 </div>
    </center>
</form>


<?php
}?>
 

