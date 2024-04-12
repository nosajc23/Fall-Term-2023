<?php
    // Hashes Demo
    // Hashes use keys to retrieve values, instead
    // of zero-based integers
    $actors = [
                'Patrick Stewart' => 'Jean-Luc Picard',
                'Kaye Mulgrew' => 'Kathryn Janeway',
                'William Shatner' => 'James Kirk'
    ];
    echo "The best Star Trek captain was {$actors['Patrick Stewart']}.";
    
    // Traversing hashes
    foreach($actors as $actor=>$captain){
        echo "<p>{$actor} played the role of Captain {$captain}.<p>";
    }

    // An array of hashes
    $employees = [

                    [
                        'name' => 'Jyn Erso',
                        'position' => 'Rebel scum'
                    ],
                    [
                        'name' => 'Jason',
                        'positon' => 'Student'
                    ]
                ];
    
    echo "<p>{$employees[1]['name']} is {$employees[1]['position']}</p>"; //pick one element out and output it
    foreach($employees as $employee){
        echo "<p>{$employee['name']} is {$employee['poisition']} </p>";
    }

?>