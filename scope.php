<?php
$superhero = "Superhero";


function revealIdentity()
{
    global $superhero;
    $message = "real name is Clark Kent";
    // $superhero = "Spiderman"; // do not change the identity
    echo "$superhero $message";
}
;

// revealIdentity();

function countVisitors()
{
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor $visitorCount has Arrived! \n";
}
;

countVisitors();
countVisitors();
countVisitors();

function connect()
{
    echo "Connecting ....";
    return 1;
}

function getDB()
{
    static $db;

    if ($db === null) {
        $db = connect();
    }
}