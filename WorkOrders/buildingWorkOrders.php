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
                margin-left: 150px;
            }
            
            #viewOrders{
                float: left;
                width:1065px;
                height:525px;
                overflow:scroll;
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
            #insertOrder.hidden {display:none;}
            
            #buttonOrder.hidden {display:block;}
        </style>

<?php
$i=0;
        $username="root"; 
        $password="lininG"; 
        $database="SENIOR_PROJECT";
        $buildingName=$_GET['buildingName'];

        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query4="SELECT id FROM BUILDING Where name='$buildingName'"; 
        $result4=mysql_query($query4); 
        //$num4=mysql_numrows($result4); 
        
        
        mysql_close(); 
        
        $buildingID=mysql_result($result4,$i,"id");
        
        mysql_connect("localhost",$username,$password); 
        @mysql_select_db($database) or die( "Unable to select database"); 
        $query5="SELECT id, title, userID, dateTime, description, statusDescription 
            FROM WORK_ORDERS Where buildingID='$buildingID' and isActive=1"; 
        $result5=mysql_query($query5); 
        $num5=mysql_numrows($result5); 
        mysql_close(); 
        
?>

        
        <div id="contentwrapper">
        <div id="contentcolumn">
            <div id="viewOrders">
                <table>
                    <tr>
                            <?php echo"<h1><b>$buildingName</h1></b>";?>
                    </tr>
                    <tr>
                        <div>
                                <input type='button'  id="buttonOrder" class="hidden" value="Insert WorkOrder" onclick="toggle_visibility('insertOrder');toggle_visibilitybutton('buttonOrder')">
                            </div>
                            <div id="insertOrder" class="hidden">
                                <?php 
                                $id=$id;
                                $name=$name;
                                echo"
                                    <form method='post' action='insertWorkOrder.php'>
                                   <input type='number' name='admin' value='2' hidden='true'/>
                                   <input type='number' name='id' value='$id' hidden='true'  /><br>
                                   <input type='number' name='Update' value='0' hidden='true'/>
                                   <input type='text' name='name' value=' $name' hidden='true'/>
                                   <input type='text' name='zone' value='0' hidden='true'/>
                                   <input type='number' name='buildingID' value='$buildingID' hidden='true'/>
                                   <input type='text' name='buildingName' value='$buildingName' hidden='true'/>

                                   Room #
                                   <input type='number' name='roomID' />    <br>
                                   Floor #
                                   <input type='number' name='floorID' />    <br> 
                                   Title
                                   <input type='text' name='title' />    <br>
                                   Description
                                   <input type='text' name='description' />    <br> 
                                   <input type= 'submit' value='Insert New WorkOrder'> </form>  ";
                                   ?>
                               <script>
                                   function toggle_visibility(id) {
                                       var e = document.getElementById(id);
                                          e.style.display = 'block';
                                   }
                                   function toggle_visibilitybutton(id) {
                                       var e = document.getElementById(id);
                                          e.style.display = 'none';
                                   }
                               </script>
                           </div>
                    </tr>
                </table>
                     <?php $j=0;
                     if($num5==0)
                     {
                         echo"There are no work orders in the selected building";
                     }
                     else
                     {
                        while ($j < $num5)
                        {
                            $operationsWorkOrderID=mysql_result($result5,$j,"id");
                            $workOrderTitle=mysql_result($result5,$j,"title");
                            $workID=mysql_result($result5,$j,"userID");
                            $date=mysql_result($result5,$j,"dateTime");
                            ?>
                            <table>
                                <tr>
                                    <td>
                                        <font face="Arial, Helvetica, sans-serif"><?php echo $date;?></font>
                                        <?php echo ": ";?>
                                    </td>
                                    <td>
                                        <script>
                                        function basicPopup(url) {
                                            popupWindow = window.open
                                            (url,'popUpWindow','height=350,width=650,left=100,\n\
                                            top=100,resizable=yes,scrollbars=yes,toolbar=yes,\n\
                                            menubar=no,location=no,directories=no, status=yes');
                                            }
                                        </script>
                                        <a href="prevOrderStatus.php?id=<?php echo "$workID";?>&order=<?php echo "$operationsWorkOrderID";?>&userStatus=1>" 
                                           onclick="basicPopup(this.href);return false;">
                                        <font face="Arial, Helvetica, sans-serif"><?php echo $workOrderTitle; ?></font>
                                        </a> 
                                    </td>
                                </tr>
                            </table>
                            
                            <?php $j++;}
                    }?>
            </div>
        </div>
        </div>