<?php
class Move{
    public $pid;
    
    
}
    $playerMove = makePlayerMove($slot);  // instance of Move
    if ($playerMove->isWin || $playerMove->isDraw) {
     echo createResponse($playerMove); exit;
    }
    $opponentMove = makeOpponentMove(); // instance of Move
    echo createResponse($playerMove, $opponentMove);
    exit;
   //...
    function createResponse($playerMove, $opponentMove = null) {
     $result = array("response" => true, "ack_move" => $playerMove);
     if ($opponentMove != null) { $result["move"] = $opponentMove; }
     return json_encode($result);
    }
    function makePlayerMove($slot){
        
    }
    function makeOpponentMove(){
        //if strategy is smart use smart strategy
        //if strategy is random use random strategy
    }


?>