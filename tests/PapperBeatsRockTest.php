<?php

namespace Tests;

use App\RockPaperScissors as Game;
use App\Models\Player;
use PHPUnit\Framework\TestCase;

class PapperBeatsRock extends TestCase
{

    /** @test */
    public function test_player1_papper_player2_rock_1_wins()
    {
        $game = new Game;
        $player1 = new Player;
        $player2 = new Player;

        $player1->chose("Papper");
        $player2->chose("Rock");
        $winner = $game->start($player1, $player2);

        $this->assertEquals("Player 1 wins", $winner);
    }
    public function test_player2_papper_wins_player1_rock()
    {
        $game = new Game;
        $player2 = new Player;
        $player1 = new Player;

        $player2->chose("Papper");
        $player1->chose("Rock");
        $winner = $game->start($player1, $player2);

        $this->assertEquals("Player 2 wins", $winner);
    }
}
