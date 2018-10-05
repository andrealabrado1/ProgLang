<?php // index.php
//echo '{"width":7,"height":6,"strategies":["Smart","Random"]}';

$Smart = "Smart";
$Random = "Random";

$arr = array('width' => 7,'height' =>6, 'strategies' => [$Smart,$Random]);
$json=json_encode($arr);
echo $json;



?>

