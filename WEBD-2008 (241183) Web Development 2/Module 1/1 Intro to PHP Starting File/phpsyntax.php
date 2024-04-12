<?php

    //Good ole Hello World
    echo "Hello World";

    //Variables
    $cats = 13;
    $cats_feet = $cats * 4;
    $feet_story = "<p>Once there were" . $cats_feet . "Cat feet in our kitchen</p>";
    echo $feet_story;

    $my_int = 12;
    $my_float = (float)$my_int; // Cast int to a float
    unset($my_int); // Equivalent to $my_int = null
    if(!isset($my_int)&& is_float($my_float)){
        echo "<p>All is well</p>";
    }

    //Constants
    define("THE_ANSWER", 42);
    define("FULL_NAME", "Jason Castillo");
    echo "<p>" . FULL_NAME . "knows the answer" . THE_ANSWER . "</p>";

    //Strings
    $name = "Bobby McGee";
    $fancy_string = "<p>My name is {$name}</p>";
    $plain_string = '<p>My name is {$name}</p>';
    echo $fancy_string;
    echo $plain_string;

    $fancy_string .= "<p>Our name is ". strlen($name) . " characters long</p>";
    echo $fancy_string;

    //Arrays
    $numbers = [1,2,3];
    $to_do_list =["finish marking", "play pool", "cook dinner"];
    $to_do_list[] "practice taxidermy"; //adding another array
    echo "<p>Jason, {$to_do_list[0]} now!</p>";
    echo "<p>there are " . count($to_do_list) . "items in our array.</p>"; //counting how many items in array

    //Print_r, commonly used in debugging
    $numbers = "4,8,15,16,23,42";
    $dharma_hatch = explode(",", $numbers);
    print_r($dharma_hatch);
    foreach($dharma_hatch as $hatch){
        echo "<p>Now press {$hatch}</p>";
    }

    //Functions
    function say_good_day($name){
        echo "<p>A fine day indeed, {$name}!</p>";
    }

    say_good_day("Jason");
?>
