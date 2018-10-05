<?php
//game connects Board and Move strategy
class Game{
    public $board;
    public $strategy;
    
    /...
    static function fromJsonString($json) {
        $obj = json_decode($json); // instance of stdClass
        $strategy = $obj->{'strategy'};
        $board = $obj->{'board'};
        $game = new Game();
        $game->board = Board::fromJson($board);
        $name = $strategy->{'name'};
        $game->strategy = $name::fromJson($strategy);
        $game->strategy->board = $game->board;
        return $game;
    }
}

