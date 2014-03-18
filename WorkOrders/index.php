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
    <body>
        <div id="maincontainer">
            <div id="topsection">
                 <table style="width:1050px">
                    <tr>
                      <td><img src="logo.png" alt="Benedictine College"></td>
                      <td><h1>Work Order Site</h1></td>
                      </tr>
                    </table>
            </div>
            </div>
                <?php
                ?>
                <form method="post" action="sortUser.php">
                    <center>
                        <b>Please Login</b>
                    <table style="width:300px">
                        <tr>
                            <td>Email:</td>
                            <td><input type="text" size="30" name="email"/> <br></td>
                        </tr>
                        <tr>
                          <td>Password:</td>
                          <td><input type="password" size="30" name="password"/><br></td>
                        </tr>
                    </table>
                    <input type="submit" value="Login">
                    </center>
                </form>
            <div id="footer">Work Order Senior Project 2014</div>
    </body>
</html>

