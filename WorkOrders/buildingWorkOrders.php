<?php
$i=0;
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query4="SELECT id FROM BUILDING Where name='$buildingName'"; 
        $result4=mysql_query($query4); 
        $num4=mysql_numrows($result4); 
        mysql_close(); 
        
        $buildingID=mysql_result($result4,$i,"id");
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query5="SELECT title, dateTime, description, statusDescription 
            FROM WORK_ORDERS Where buildingID='$buildingID'"; 
        $result5=mysql_query($query5); 
        $num5=mysql_numrows($result5); 
        mysql_close(); 
        
?><style type="text/css">
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
                height:500px;
                overflow:scroll;
                }
        </style>
        <div id="contentwrapper">
        <div id="contentcolumn">
 <?php $j=0;while ($j < $num5)
                    {$workOrderTitle=mysql_result($result5,$j,"title");
                    ?>
            
                <table>
                    <tr>
                        <td>
         <font face="Arial, Helvetica, sans-serif"><?php echo $workOrderTitle; ?></font>
                            </a> 
                        </td>
                    </tr>
                </table>
            <?php $j++;}?>
        </div>
        </div>