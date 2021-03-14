<?php
$choices = array("Rock", "Paper", "Scissors");

$playerAscore = 0;
$playerBscore = 0;
$draws = 0;

for ($i = 1; $i < 11; $i++) {
    
    echo (  "Round " . $i . "\r\n"  );
    echo '<br>';
    $playerAchoose = rand(1, 3);
    $playerBchoose = rand(1, 3);
    $pA = $playerAchoose;
    $pB = $playerBchoose;

    echo ("Player A: " . $choices[$pA - 1] . "\r\n" );
    echo '<br>';
    echo ("Player B: " . $choices[$pB - 1] . "\r\n" );
    echo '<br>';

    $result;
    $winner = 0;

    if ($pA == 1) {    
        if ($pB == 2) {    
            $result = "Player B wins...";
            echo ("Paper covers Rock :"  );
            $winner = 2;
            $playerBscore++;
        } else if ($pB == 3) {   
            $result = "Player A wins...";
            echo ("Rock crushes Scissors :"  );

            $winner = 1;
            $playerAscore++;
        } else        
        {
            $result = "It is a draw...";
            echo ("Same choice :"  );

            $draws++;
        }
    } else if ($pA == 2) {  
        if ($pB == 3) {   
            $result = "Player B wins...";
            echo ("Scissors cut paper :"  );

            $winner = 2;
            $playerBscore++;
        } else if ($pB == 1) {   
            $result = "Player A wins...";
            echo ("Paper covers Rock :"  );

            $winner = 1;
            $playerAscore++;
        } else {
            $result = "It is a draw...";
            echo ("Same choice :"  );
            $draws++;
        }
    } else if ($pA == 3) {   
        if ($pB == 1) {   
            $result = "Player B wins...";
            echo ("Rock crushes Scissors :"  );
            $winner = 2;
            $playerBscore++;
        } else if ($pB == 2) {   
            $result = "Player A wins...";
            echo ("Scissors cut paper :"  );
            $winner = 1;
            $playerAscore++;
        } else {
            $result = "It is a draw...";
            echo ("Same choice :"  );
            $draws++;
        }
    }

    
   

    echo ($result . "\r\n" );
    echo '<br>';
    echo '<br>';


   
}


echo ("Player A: " . $playerAscore . " wins" . "\r\n");
echo '<br>';
echo '<br>';

echo ("Player B: " . $playerBscore . " wins" . "\r\n");
echo '<br>';
echo '<br>';

echo ($draws . " Games were a draw.");


?>