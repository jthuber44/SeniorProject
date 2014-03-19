<!DOCTYPE html>
<html>
    <head>
        <title>Benedictine College Work Orders</title>
        <style type="text/css">
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
    
    <?php
    $box=$_POST['box'];
    $buildingID=$_POST['buildingID'];
    $roomID=$_POST['roomID'];
    $floorID=$_POST['floorID'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $admin=$_POST['admin'];
    ?>
    
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:1050px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td><h1><?php echo "$name" ?></h1></td>
                </tr>
            </table>
            <h1></div></div>
        
        <div id="contentwrapper">
        <div id="contentcolumn">
            <center><b>New Work Order:</b></center>
             <form method="post" action="insertWorkOrder.php">
                    <center>
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
                    <input type="text" value="<?php echo"$admin"?>" name="admin" hidden="true"/>
                    <input type="submit" value="Insert New WorkOrder">
                    </center>
                </form>
        </div>
        </div>
        
        
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>



                