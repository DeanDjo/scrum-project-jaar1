<?php
function getUserInput($prompt)
{
    echo $prompt . ": ";
    return trim(fgets(STDIN));