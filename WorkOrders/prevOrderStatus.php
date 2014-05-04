<!DOCTYPE html>
<html>
    <head>
        <title>Benedictine College Work Orders: Work Order Status</title>
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
                margin-left: 0px;
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
                height:500px;
                overflow:scroll;
                }
        </style>
    </head>

<?php
        $workID=$_GET['id'];
        $order=$_GET['order'];
        $userStatus=$_GET['userStatus'];
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        $i=0;
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query="SELECT id, title, dateTime, description, statusDescription, floorID, roomID
            FROM WORK_ORDERS Where userID='$workID' and id='$order'"; 
        $result=mysql_query($query); 
        $num=mysql_numrows($result); 
        mysql_close(); 
        
        $j=0;while ($j < $num)
            {$title=mysql_result($result,$j,"title");
            $dateTime=mysql_result($result,$j,"dateTime");
            $description=mysql_result($result,$j,"description");
            $status=mysql_result($result,$j,"statusDescription");
            $sfloorID=mysql_result($result,$j,"floorID");
            $sroomID=mysql_result($result,$j,"roomID");
?>
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:650px">
                <tr>
                  <td width="300"><img src="logo.png" alt="Benedictine College"></td>
                  <td>
                      <center>
                      <h1><?php echo $title ?></h1>
                      </center>
                  </td>
            </table>
        </div></div>
        
        <div id="contentwrapper">
            <div id="contentcolumn">
                    <table width="550">
                        <tr>
                        <td width="100">
                            <b>
                            <?php echo "Date/Time:"; ?>
                            </b>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $dateTime; ?></font>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                            <?php echo "Issue:"; ?>
                            </b>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $description; ?></font>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <b>
                            <?php echo "Status:"; ?>
                            </b>
                        </td>
                        <td>
                            <?php
                            if($userStatus==0){?>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $status; ?></font>
                            <?php
                            }
                            else
                            {?>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $status; ?></font>   
                                <?php
                                echo"             
                                    <form method='post' action='updateStatus.php'> 
                                    <input type='text' size='15' name='statusDescription'/>
                                    <input type='text' name='userID' value='$workID' hidden='true'/>
                                    <input type='text' name='orderID' value='$order' hidden='true'/>
                                    <input type='submit' value='Update WorkOrder'> 
                                    </form>";
                                ?>
                                 
                            <?php
                            }
                            ?>
                        </td>                     
                    </tr>
                    <tr>
                        <td>
                            <b>
                            <?php echo "Floor:"; ?>
                            </b>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $sfloorID; ?></font>
                        </td>
                    </tr>                    
                    <tr>
                        <td>
                            <b>
                            <?php echo "Room:"; ?>
                            </b>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $sroomID; ?></font>
                        </td>
                    </tr>  
                    </table>
                    <?php $j++;}?>
            </div>
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>
