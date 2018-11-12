<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$cbCurrency = file_get_contents('http://forex.cbm.gov.mm/api/latest');
$getCurrency = json_decode($cbCurrency);
echo $getCurrency->info;
$today = $getCurrency->timestamp;
echo date('d/M/Y',$today);

function myNumber($mynum){
    $json = '[{"from":"\\u0030","to":"\\u1040"},{"from":"\\u0031","to":"\\u1041"},{"from":"\\u0032","to":"\\u1042"},{"from":"\\u0033","to":"\\u1043"},{"from":"\\u0034","to":"\\u1044"},{"from":"\\u0035","to":"\\u1045"},{"from":"\\u0036","to":"\\u1046"},{"from":"\\u0037","to":"\\u1047"},{"from":"\\u0038","to":"\\u1048"},{"from":"\\u0039","to":"\\u1049"}]';
        $rule = json_decode($json,true);
        foreach ($rule as $data) {
            $from_json = $data["from"];
             if (strpos($from_json, chr(13)) !== false) {
             $from_json = str_replace(chr(10), "\\n", $from_json);
             $from_json = str_replace(chr(13), "\\n", $from_json);
             $from_json = str_replace("\f", "\\f", $from_json);
             }
            $from = "~".json_decode('"'.$from_json.'"')."~u";
            $to = json_decode('"'.$data["to"].'"');
            $mynum = preg_replace($from, $to, $mynum);
        }
        return $mynum;
}
//echo myNumber('100');
?>
<?php foreach ($getCurrency as $keys => $value):?>
<!-- <li><?//php echo $data; ?></li> -->
<?php if(is_array($value) || is_object($value)): ?>
<?php foreach($value as $cid => $rates): ?>
    <li><?php echo $cid ." = " .myNumber($rates); ?></li>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>
</body>
</html>
