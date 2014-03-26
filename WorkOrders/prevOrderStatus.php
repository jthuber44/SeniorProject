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
    //$name=$_POST['name'];
    //$buildingID=$_POST['buildingID'];
    //$roomID=$_POST['roomID'];
    $username="root"; 
    $password="lininG"; 
    $database="SENIOR_PROJECT"; 
    //$i=0;

    mysql_connect("localhost",$username,$password); 
    @mysql_select_db($database) or die( "Unable to select database"); 
    $query="SELECT id, title, dateTime,statusDescription  FROM WORK_ORDERS Where userID='$id'"; 
    $result=mysql_query($query); 
    $num=mysql_numrows($result);
    mysql_close(); 
?>
    <body>
        <?php $j=0;while ($j < $num)
                    {$f1=mysql_result($result,$j,"title");
                    $f2=mysql_result($result,$j,"dateTime");
                    $f3=mysql_result($result,$j,"statusDescription");
                    ?>
        
        <table>
            <tr>
                <td>
                    <font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
                </td>
                <td>
                    <font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
                </td>
                <td>

                </td>
            </tr>
        </table>
            <?php $j++;}?>
        trying to output previous work order status description
        test
    </body>
</html>
