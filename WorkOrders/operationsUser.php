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
                height: 525px;
                margin-left: -100%;
                background: #EAEAEA;
            }
            
            #prevOrders{
                float: left;
                background-color:#EAEAEA;
                width:300px;
                height:500px;
                overflow:scroll;
                
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
    $username="root"; 
    $password="lininG"; 
    $database="SENIOR_PROJECT"; 
    $workOrders=$_GET['workOrders'];
    
    
    if($workOrders==1)
    {
        $Update=$_GET['update'];
        $id=$_GET['id'];
        $name=$_GET['name'];
        $workOrderBuilding=$_GET['workOrderBuilding'];
        $buildingName=$_GET['buildingName'];
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query2="SELECT name FROM BUILDING"; 
        $result2=mysql_query($query2);
        $num2=mysql_numrows($result2);
        mysql_close(); 
            
    }
    if($workOrders==0){    
         $Update=$_GET['update']; 
        $id=$_POST['id'];
        $name=$_POST['name'];
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query2="SELECT name FROM BUILDING"; 
        $result2=mysql_query($query2);
        $num2=mysql_numrows($result2);
        mysql_close(); 
        }
            
        ?>
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:1200px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td>
                      <h1><?php echo "$name" ?></h1>
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
            <div id="floor" height="200px">
                    <?php
                      if($Update=="1")
                      {   
                          include('buildingWorkOrders.php');          
                      }
                      else
                      {
                          echo"Click on a Building";
                      }

                    ?>
                </div>
                </div>
        </div>
        </div>
        <div id="leftcolumn">
            <b>Dorm Orders:</b>
            <br>
            <div id="prevOrders">
                <?php $j=0;while ($j < $num2)
                    {$buildingName=mysql_result($result2,$j,"name");
                    ?>

                <table>
                    <tr>
                        <td>
                            <a href="operationsUser.php?workOrderBuilding=<?php echo "1";?>
                               &update=1&name=<?php echo "$name";?>&id=<?php echo "$id";?>
                               &buildingName=<?php echo "$buildingName";?>&workOrders=<?php echo "1";?>" >
                                <font face="Arial, Helvetica, sans-serif"><?php echo $buildingName; ?></font>
                            </a> 
                        </td>
                    </tr>
                </table>
            <?php $j++;}?>
           </div>
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>

