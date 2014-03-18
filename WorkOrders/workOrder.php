<?php
    $box=$_POST['box'];
    $buildingID=$_POST['buildingID'];
    $roomID=$_POST['roomID'];
    $floorID=$_POST['floorID'];
    $id=$_POST['id'];
    $name=$_POST['name'];
?>


                <form method="post" action="insertWorkOrder.php">
                    <center>
                        <b>New WorkOrder</b>
                    <table style="width:300px">
                    <tr>
                      <td>Title:</td>
                      <td><input type="text" size="30" name="title"/> <br></td>
                      </tr>
                    <tr>
                      <td>Description:</td>
                      <td><input type="text" size="30" name="description"/><br></td>
                    </tr>
                    </table>
                    <input type="text" value="<?php echo"$box"?>" name="zone" hidden="true"/>
                    <input type="text" value="<?php echo"$buildingID"?>" name="buildingID" hidden="true"/>
                    <input type="text" value="<?php echo"$roomID"?>" name="roomID" hidden="true"/>
                    <input type="text" value="<?php echo"$floorID"?>" name="floorID" hidden="true"/>
                    <input type="text" value="<?php echo"$id"?>" name="id" hidden="true"/>
                    <input type="text" value="<?php echo"$name"?>" name="name" hidden="true"/>
                    <input type="submit" value="Insert New WorkOrder">
                    </center>
                </form>