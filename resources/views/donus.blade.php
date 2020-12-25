<html>
<head>
    <title>3D</title>
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9"> <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="now"> </head>
<body>
<h1>3D Payment Page</h1> <h3>Payment Response</h3> <table border="1">
    <tr>
        <td><b>Parameter Name</b></td> <td><b>Parameter Value</b></td>
    </tr>
<?php $odemeparametreleri =
    array("AuthCode","Response","HostRefNum","ProcReturnCode","TransId","ErrMsg"); foreach($_POST as $key => $value)
{
    $check=1; for($i=0;$i<6;$i++)
{
    if($key == $odemeparametreleri[$i])
    {
        $check=0; break;
    }
}
    if($check == 1)
    {
        echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
    }
}
    ?>
</table>
<br>
<br>
<?php
$hashparams = $_POST["HASHPARAMS"];
$hashparamsval = $_POST["HASHPARAMSVAL"];
$hashparam = $_POST["HASH"];
$storekey="xxxxxx";
$paramsval="";
$index1=0;
$index2=0;
while($index1 < strlen($hashparams))
{
    $index2 = strpos($hashparams,":",$index1);
    $vl = $_POST[substr($hashparams,$index1,$index2- $index1)]; if($vl == null)
    $vl = "";
    $paramsval = $paramsval . $vl; $index1 = $index2 + 1;
}
$storekey = "xxxxxx";
$hashval = $paramsval.$storekey;
$hash = base64_encode(pack('H*',sha1($hashval))); if($paramsval != $hashparamsval || $hashparam != $hash)
    echo "<h4>Security Alert. The digital signature is not valid.</h4>"; $mdStatus = $_POST["mdStatus"];
$ErrMsg = $_POST["ErrMsg"];
if($mdStatus == 1 || $mdStatus == 2 || $mdStatus == 3 || $mdStatus == 4)
{
echo "<h5>3D Transaction is Success</h5><br/>";
?>
<h3>Payment Response</h3> <table border="1">
    <tr>
        <td><b>Parameter Name</b></td> <td><b>Parameter Value</b></td>
    </tr>
<?php
    for($i=0;$i<6;$i++)
    {
        $param = $odemeparametreleri[$i];
        echo "<tr><td>".$param."</td><td>".$_POST[$param]."</td></tr>";
    }
    ?>
</table>
<?php
$response = $_POST["Response"]; if($response == "Approved")
{
    echo "Ödeme Islemi Basarili";
}
else
{
    echo "Transaction is not Success. Error = ".$ErrMsg;
}
}
else
{
    echo "<h5>3D Transaction is not Success</h5>";
}
?>
</body>
</html>
