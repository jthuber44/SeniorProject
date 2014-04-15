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
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT"; 
        $i=0;
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query="SELECT id, title, dateTime, description, statusDescription 
            FROM WORK_ORDERS Where userID='$workID' and id='$order'"; 
        $result=mysql_query($query); 
        $num=mysql_numrows($result); 
        mysql_close(); 
?>
    <body>
        <div id="maincontainer">
        <div id="topsection">
            <table style="width:650px">
                <tr>
                  <td><img src="logo.png" alt="Benedictine College"></td>
                  <td>
                      <h1><?php echo "Previous Order" ?></h1>
                  </td>
            </table>
        </div></div>
        
        <div id="contentwrapper">
            <div id="contentcolumn">
                <?php $j=0;while ($j < $num)
                    {$title=mysql_result($result,$j,"title");
                    $dateTime=mysql_result($result,$j,"dateTime");
                    $description=mysql_result($result,$j,"description");
                    $status=mysql_result($result,$j,"statusDescription");?>
                <center>
                    </br>
                    </br>
                    <table border="1" width="550">
                        <tr>
                            <th width="200">
                                <?php echo "Title:"; ?>
                            </th>
                            <th>
                                <?php echo "Date and Time:"; ?>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <font face="Arial, Helvetica, sans-serif"><?php echo $title; ?></font>
                            </td>
                            <td>
                                <font face="Arial, Helvetica, sans-serif"><?php echo $dateTime; ?></font>
                            </td>
                        </tr>
                    </table>
                    </br>
                    <table border="1" width="550">
                    <tr>
                        <th width="200">
                            <?php echo "Issue:"; ?>
                        </th>
                        <th>
                            <?php echo "Status:"; ?>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $description; ?></font>
                        </td>
                        <td>
                            <font face="Arial, Helvetica, sans-serif"><?php echo $status; ?></font>
                        </td>
                    </tr>
                    </table>
                </center>
                    <?php $j++;}?>
            </div>
        </div>
        <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>
