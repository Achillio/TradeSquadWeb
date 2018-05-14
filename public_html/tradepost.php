       <head>
           <title>Ledger Submitted</title>
           

           
           
           
            <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
           
       </head>
      



<style>
    fieldset { width: 25%; }
    .label { text-align: left; }
    .pads { background-color: #f2f2f2; }
    #public {color: green; text-decoration: none; font-weight:bold;}
    #public:link {color:green; text-decoration: none; font-weight:bold;}
    #public:visited {color:green; text-decoration: none; font-weight:bold;}
    #private {color: red; text-decoration: none; font-weight:bold;}
    #private:link {color:red; text-decoration: none; font-weight:bold;}
    #private:visited {color:red; text-decoration: none; font-weight:bold;}
</style>

<?php
//$movie = $_POST['field3'];
//foreach($movie AS $title){
  //  echo "{$title}, ";
    //}


 $path = 'Public.txt';
 if (isset($_POST['field1']) && isset($_POST['field2'])) {
    $fh = fopen($path,"a+");
    $string = '<fieldset><legend>'.'<a href="'.$_POST['field4'].'">'.$_POST['field1'].'</a></legend>'.'<font color="green">Has: '.$_POST['field2'].'<font color="red"><br>Wants: '.$_POST['field3']."</font></fieldset>";
   // fwrite($fh,$string); // Write information to the file
$file_data = $string;
$file_data .= file_get_contents('Public.txt');
file_put_contents('Public.txt', $file_data);

    fclose($fh); // Close the file
 }
 $file = fopen("redacted.txt","a");
$ip="\n".$_SERVER['REMOTE_ADDR']." | ".$_POST['field1'];
fwrite($file,$ip);
fclose($file);




 $path = 'redacted.txt';
 if (isset($_POST['field1']) && isset($_POST['field2'])) {
    $fh = fopen($path,"a+");
    $string1 = ' | '.date("Y-m-d h:i:sa",strtotime('-5 hours'))."\n";
    fwrite($fh,$string1); // Write information to the file
    fclose($fh); // Close the file
 }
  echo "<font face='verdana'><center>".'The following data has been stored to the Trading Post...'."<br><br><br><br><br>"."<fieldset><legend align='left'><font color='green'><a href='Public.txt' id='public'>Trading Information</a></font></legend><div class='pads'><div class='label'>".'Discord: <br>'.$_POST['field1']."</div><br><div class='label'>".'Has: <br>'.$_POST['field2']."</div><br><div class='label'>".'Wants: <br>'.$_POST['field3']."</div></div></fieldset><br>"."<fieldset><legend align='left'><font color='red'><a href='/info/Private.txt' id='private'>Private Ledger (admin only)</a></font></legend><div class='pads'><div class='label'>"."</div><br><div class='label'>".'IP Address: <br>'.$ip."</div></div></fieldset><br><br><br>"."<br>"."<br><br><br></div><br><br><br><br>";
?>


<p> You will be redirected in <span id="countdowntimer">15 </span> seconds.</p>

<script type="text/javascript">
    var timeleft = 15;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);

</script>
<meta http-equiv="refresh" content="15; url=http://tradesquad.000webhostapp.com" />
