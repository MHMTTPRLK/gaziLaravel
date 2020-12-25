<html>
<head>
    <title>3D PAY</title>
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9"> <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="now"> </head>
<body>
@php

$clientId = "990000000000001";
$amount = "9.95";
$oid = "1291899411421";
$okUrl =route('odeme.donus');
$failUrl = route('odeme.donus');
$rnd = microtime();
$taksit = "";
$islemtipi="Auth";
$storekey = "123456";
$hashstr = $clientId . $oid . $amount . $okUrl . $failUrl .$islemtipi. $taksit .$rnd . $storekey;
$hash = base64_encode(pack('H*',sha1($hashstr)));
@endphp
<center>
    <form method="post" action="https://entegrasyon.asseco-see.com.tr/fim/est3Dgate">
        <table>
            <tr>
                <td>Credit Card Number</td>
                <td><input type="text" name="pan" size="20"/> </tr>
            <tr>
                <td>CVV</td>
                <td><input type="text" name="cv2" size="4" value=""/></td> </tr>
            <tr>
                <td>Expiration Date Year</td>
                <td><input type="text" name="Ecom_Payment_Card_ExpDate_Year" value=""/></td> </tr>
            <tr>
                <td>Expiration Date Month</td>
                <td><input type="text" name="Ecom_Payment_Card_ExpDate_Month" value=""/></td> </tr>
            <tr>
                <td>Choosing Visa Master Card</td> <td><select name="cardType">
                        <option value="1">Visa</option>
                        <option value="2">MasterCard</option>
                    </select>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Complete Payment"/> </td>
            </tr>
        </table>
        <input type="hidden" name="clientid" value="<?php echo $clientId ?>"> <input type="hidden" name="amount" value="<?php echo $amount ?>"> <input type="hidden" name="oid" value="<?php echo $oid ?>">
        <input type="hidden" name="okUrl" value="<?php echo $okUrl ?>"> <input type="hidden" name="failUrl" value="<?php echo $failUrl ?>"> <input type="hidden" name="rnd" value="<?php echo $rnd ?>" >
        <input type="hidden" name="hash" value="<?php echo $hash ?>" >
        <input type="hidden" name="islemtipi" value="<?php echo $islemtipi ?>" > <input type="hidden" name="taksit" value="<?php echo $taksit ?>" > <input type="hidden" name="storetype" value="3d_pay" >
        <input type="hidden" name="lang" value="tr"> <input type="hidden" name="currency" value="949">
        <input type="hidden" name="firmaadi" value="My Company Name"> <input type="hidden" name="Fismi" value="is">
        <input type="hidden" name="faturaFirma" value="faturaFirma"> <input type="hidden" name="Fadres" value="XXX">
        <input type="hidden" name="Fadres2" value="XXX"> <input type="hidden" name="Fil" value="XXX"> <input type="hidden" name="Filce" value="XXX">
        <input type="hidden" name="Fpostakodu" value="postakod93013"> <input type="hidden" name="tel" value="XXX">
        <input type="hidden" name="fulkekod" value="tr"> <input type="hidden" name="nakliyeFirma" value="na fi"> <input type="hidden" name="tismi" value="XXX">
        <input type="hidden" name="tadres" value="XXX"> <input type="hidden" name="tadres2" value="XXX"> <input type="hidden" name="til" value="XXX"> <input type="hidden" name="tilce" value="XXX">
        <input type="hidden" name="tpostakodu" value="ttt postakod93013"> <input type="hidden" name="tulkekod" value="usa">
        <input type="hidden" name="itemnumber1" value="a1">
        <input type="hidden" name="productcode1" value="a2"> <input type="hidden" name="qty1" value="3">
        <input type="hidden" name="desc1" value="a4 desc"> <input type="hidden" name="id1" value="a5"> <input type="hidden" name="price1" value="6.25"> <input type="hidden" name="total1" value="7.50">
    </form>
</center>
</body>
</html>
