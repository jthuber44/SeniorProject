<?php
        $buildingID=$_POST['buildingID'];
        $id=$_POST['id'];
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
.imgClass:hover{ 
      background-position:  0px -1px;
}

.imgClass:active{
      background-position:  0px -3px;
}
</style>


             <form method="post" action="WorkOrder.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="0" name="admin" hidden="true">
                 <input type="text" value="0" name="floorID" hidden="true">
                    <center>
                    <table width="400px">
                        <tr>
                            <input type="submit" value="1" name="box" class="imgClass" height="400px"/>
                    </table>
                    </center>
                </form>