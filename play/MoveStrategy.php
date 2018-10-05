<?php 
//needs to connect randomstrategy and smartstrategy
if ($stateJson['strategy'] == "Random") {
    include 'RandomStrategy.php';
} elseif ($stateJson['strategy'] == "Smart") {
    include 'SmartStrategy.php';
} else {
    echo "error";
}
?>