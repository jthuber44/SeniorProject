<?php
        $id=$_POST['id'];
        $name=$_POST['name'];
        $buildingID=$_POST['buildingID'];
        $roomID=$_POST['roomID'];
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        $i=0;
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query1="SELECT id, title, dateTime FROM WORK_ORDERS Where userID='$id'"; 
        $result1=mysql_query($query1); 
        $num=mysql_numrows($result1);
        mysql_close(); 
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query2="SELECT name FROM BUILDING Where id='$buildingID'"; 
        $result2=mysql_query($query2); 
        mysql_close(); 
        
        $buildingName=mysql_result($result2,$i,"name");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Benedictine College Work Orders: Student User</title>
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
                height: 90px; /*Height of top section*/
            }

            #topsection h1{
                margin: 0;
                padding-top: 15px;
            }

            #contentwrapper{
                float: left;
                width: 100%;
            }

            #contentcolumn{
                margin-left: 200px; /*Set left margin to LeftColumnWidth*/
            }

            #leftcolumn{
                float: left;
                width: 200px; /*Width of left column*/
                height: 800px;
                margin-left: -100%;
                background: #EAEAEA;
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
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:1050px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td><h1><?php echo "$name, $buildingName, Room #$roomID" ?></h1></td>
                </tr>
            </table>
            <h1></div></div>
        <div id="contentwrapper">
        <div id="contentcolumn">
            <center><b>Floor Plan:</b></center>
             <form method="post" action="workOrder.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$roomID"?>" name="roomID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="0" name="floorID" hidden="true">
                    <center>
                    <table style="width:400px">
                    <tr>
                      <td><input type="submit" value="1" name="box"> </td>
                      <td><input type="submit" value="2" name="box"> </td>
                    </tr>
                    <tr>
                      <td><input type="submit" value="3" name="box"></td>
                      <td><input type="submit" value="4" name="box"></td>
                    </tr>
                    </table>
                    </center>
                </form>
        </div>
        </div>
        <div id="leftcolumn">
            <b>Previous Work Orders:</b>
            <br>
    
                
            <?php $j=0;while ($j < $num) {$f1=mysql_result($result1,$i,"title");
            $f2=mysql_result($result1,$i,"dateTime");?>
            <tr>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
            </td>
            </tr>
            <?php $j++;}?>
           
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>

