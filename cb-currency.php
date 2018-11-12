<?php
$cbCurrency = file_get_contents('http://forex.cbm.gov.mm/api/latest');
$datas = json_decode($cbCurrency);
//var_dump($datas);
echo $datas->info;
$today = $datas->timestamp;
echo date('d/M/Y',$today);


//echo $datas->rates->USD

?>
<?php foreach ($datas as $data => $value):?>
<!-- <li><?//php echo $data; ?></li> -->
<?php if(is_array($value) || is_object($value)): ?>
<?php foreach($value as $cid => $rates): ?>
    <li><?php echo $cid ." = " .$rates; ?></li>
<?php endforeach; ?>
<?php endif; ?>
<?php endforeach; ?>

