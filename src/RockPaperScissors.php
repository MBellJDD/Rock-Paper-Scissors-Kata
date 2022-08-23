<?php

namespace App;

class RockPaperScissors
{

    public function start($player1, $player2): string
    {
        if ($player1->getGesture()->getType() == "Rock" && $player2->getGesture()->getType() == "Scissors") {
            return "Player 1 wins";
        }
        if ($player1->getGesture()->getType() == "Papper" && $player2->getGesture()->getType() == "Rock") {
            return "Player 1 wins";
        }
        if ($player1->getGesture()->getType() == "Scissors" && $player2->getGesture()->getType() == "Papper") {
            return "Player 1 wins";
        }
        if ($player2->getGesture()->getType() == "Papper" && $player1->getGesture()->getType() == "Rock") {
            return "Player 2 wins";
        }
    }
}
