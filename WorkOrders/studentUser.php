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
                margin-left: 200px;
            }

            #leftcolumn{
                float: left;
                width: 300px;
                height: 525px;
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
        $query1="SELECT id, title, dateTime,statusDescription  FROM WORK_ORDERS Where userID='$id'"; 
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
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:1200px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td>
                      <h1><?php echo "$name, $buildingName, Room #$roomID" ?></h1>
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
            <center><b>Floor Plan:</b></center>
                <div id="floor" height="200px">
                 <?php 
                 global $student;
                 $student = '1';
                   include('floorPlans.php'); ?>
                </div>
        </div>
        </div>
        <div id="leftcolumn">
            <b>Previous Work Orders:</b>
            <br>
            <div id="prevOrders">
                <?php $j=0;while ($j < $num)
                    {$f1=mysql_result($result1,$j,"title");
                    $f2=mysql_result($result1,$j,"dateTime");
                    ?>
            
                <table>
                    <tr>
                        <td>
                            
                            <script>
                            function basicPopup(url) {
                                popupWindow = window.open
                                (url,'popUpWindow','height=500,width=650,left=100,\n\
                                top=100,resizable=yes,scrollbars=yes,toolbar=yes,\n\
                                menubar=no,location=no,directories=no, status=yes');
                                }
                            </script>
                            <a href="prevOrderStatus" 
                               onclick="basicPopup(this.href);return false">
                                <font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
                            </a> 
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
                        </td>
                    </tr>
                </table>
            <?php $j++;}?>
           </div>
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>

