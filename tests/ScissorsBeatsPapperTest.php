<?php

namespace Tests;

use App\RockPaperScissors as Game;
use App\Models\Player;
use PHPUnit\Framework\TestCase;

class ScissorsBeastsPapper extends TestCase
{

    /** @test */
    public function test_player1_scissors_player2_papper_1_wins()
    {
        $game = new Game;
        $player1 = new Player;
        $player2 = new Player;

        $player1->chose("Scissors");
        $player2->chose("Papper");
        $winner = $game->start($player1, $player2);

        $this->assertEquals("Player 1 wins", $winner);
    }
}
