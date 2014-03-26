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
                height: 90px;
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
                margin-left: 300px;
            }

            #leftcolumn{
                float: left;
                width: 300px;
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
            
            #prevOrders{
                float: left;
                background-color:#EAEAEA;
                width:300px;
                height:400px;
                overflow:scroll;
            }
        </style>
    </head>
    
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
        
        $query2="SELECT name FROM BUILDING Where id='$buildingID'"; 
        $result2=mysql_query($query2); 
        
        
        $query3="SELECT id, floorID FROM FLOOR Where buildingID='$buildingID'"; 
        $result3=mysql_query($query3); 
        $num3=mysql_numrows($result3);
        
        $query4="SELECT id FROM ROOM Where buildingID='$buildingID'"; 
        $result4=mysql_query($query4); 
        $num4=mysql_numrows($result4);

        mysql_close(); 
        
        $buildingName=mysql_result($result2,$i,"name");
        
        ?>
    
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:1200px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td>
                      <h1><?php echo "$name, $buildingName" ?></h1>
                  </td>
                  <td>
                      <form method="post" action="index.php">
                          <input type="submit" value="LogOut">
                    </form>
                  </td>
                </tr>
            </table>
            
            <h1></div></div>
        <div id="contentwrapper">
        <div id="contentcolumn">
            <b>Select Floor:</b>
                 <form method="post" action="workOrder.php">
                 <input type="text" value="<?php echo "$buildingID"?>" name="buildingID" hidden="true">
                 <input type="text" value="<?php echo "$name"?>" name="name" hidden="true">
                 <input type="text" value="<?php echo "$id"?>" name="id" hidden="true">
                 <input type="text" value="1" name="admin" hidden="true">
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
                 <button type="button" value="<?php echo"$floorid"?>">Select Floor</button>
                 
                 <script>
                  // var button = document.getElementById('button'); // Assumes element with id='button'

                    //button.onclick = function() {
                      //  var div = document.getElementById('newpost');
                       // if (div.style.display !== 'none') {
                        //    div.style.display = 'none';
                       // }
                       // else {
                        //    div.style.display = 'block';
                        //}
                   // };
                 </script>
                 <br>
                 
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
            <button type="button" value="<?php echo"$roomid"?>">Select Room</button>
                 
        </div>
                <div id="floor" height="200px">
                 <?php 
                 global $student;
                 $student = '0';
                   include('floorPlans.php'); ?>
                </div>
        </div>
        <div id="leftcolumn">
            <b>Previous Work Orders:</b>
            </br>
            <div id="prevOrders">
                <?php $j=0;while ($j < $num) 
                    {$f1=mysql_result($result1,$j,"title");
                    $f2=mysql_result($result1,$j,"dateTime");?>
                <table>
                    <tr>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
                        </td>
                    </tr>
                </table>
                <?php $j++;} ?>
            </div>
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>

