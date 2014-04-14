<?php
        $buildingID=$_POST['buildingID'];
        $id=$_POST['id'];
        $admin=$_POST['admin'];
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






<?php
if($admin==1)
{?>
             <form method="post" action="adminUser.php">
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