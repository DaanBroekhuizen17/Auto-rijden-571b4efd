<?php
    echo ("hoe oud ben je?")."\n";
    $leeftijd = readline($prompt);
    if ($leeftijd > 16.5){
        echo ("je mag beginnen met rijlessen!");
    } else {
        echo ("helaas, je mag nog niet beginnen met rijlessen");
    }

?>