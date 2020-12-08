<?php

// Qoutes storage to store qoutes data
$quotes = [
    [
        "quote"  => "Engineering is the closest thing to magic that exists in the world.",
        "source" => "Elon Musk",
        "citation" => "SpaceX Launch",
        "year" => "2018",
        "tag" => "Business",
    ],

    [
        "quote"  => "Our industry does not respect tradition - it only respects innovation.",
        "source" => "Satya Nadella",
        "year" => "2019",
        "tag" => "Technology",
    ],
    
    [
        "quote"  => "For me, it matters that we drive technology as an equalizing force, as an enabler for everyone around the world.",
        "source" => "Sundar Pichai",
        "citation" => "Wikimedia Commons",
        "year" => "2017",
    ],
    
    [
        "quote"  => "Stone Age. Bronze Age. Iron Age. We define entire epics of humanity by the technology they use.",
        "source" => "Reed Hastings",
        "tag" => "Business",
    ],

    [
        "quote" => "Work takes on new meaning when you feel you are pointed in the right direction. Otherwise, it's just a job, and life is too short for that.",
        "source" => "Tim Cook",
        "citation" => "New York Times Interview",
        "tag" => "Inspiring"
    ],

    [
        "quote"  => "The biggest risk is not taking any risk... In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks.",
        "source" => "Mark Zuckerberg",
        "citation" => "People's Mag",
        "year" => "2015",
        "tag" => "Passion",
    ],

    [
        "quote"  => "You don’t have to be a genius or a visionary or even a college graduate to be successful. You just need a framework and a dream.",
        "source" => "Michael Dell",
        "citation" => "Direct from Dell",
        "year" => "1999",
        "tag" => "Success",
    ],

    [
        "quote"  => "Desperation sometimes drives innovation.",
        "source" => "Dara Khosrowshahi",
    ],

];

// Random color selction for background style on body and "show another qoute button"
$bgColors = ["#365ab5", "#802284", "#22846b", "#842222", "#846422", "#272623", "#1b1d21", "#5936b5"];

// Get random value from the colors array
$randomColor = $bgColors[array_rand($bgColors)];

// Get random array key a multidem-array, used later to pass $qoutes
function getRandomQuote($array){
    $quotesCount = count($array) - 1;
    $randomNum = rand(0, $quotesCount);
    return $randomNum;
}

// Print the randomly generated array element, $qoutes is passed as argument on execution 
function printQuote($array){
    // Get the random value generatd from the above function
    $targetPrint = print_r(getRandomQuote($array), true);

    // Store array data into variables
    $quote = print_r($array[$targetPrint]["quote"], true);
    $source = print_r($array[$targetPrint]["source"], true);

    // Some Qoutes data are not requeired to filled, condition to check if data exist then store
    if (isset($array[$targetPrint]['citation'])){
        $citation = print_r($array[$targetPrint]["citation"], true);
    }
    if (isset($array[$targetPrint]['year'])){
        $year = print_r($array[$targetPrint]["year"], true);
    }
    if (isset($array[$targetPrint]['tag'])){
        $tag = print_r($array[$targetPrint]["tag"], true);
    }

    // HTML print
    echo '<p class="quote">' . $quote . '</p>';
    echo '</br>';
    echo '<p class="source">' . $source . '</p>';

    // Checks if variables DO exist, then print
    if (isset($tag)) {
        echo '<span class="tag">' . $tag . ' ' . '</span>';
    }
    if (isset($citation)) {
        echo '<span class="citation">' . $citation . ' ' . '</span>';
    }
    if (isset($year)) {
        echo '<span class="year">' . $year . '</span>';
    }

 }

?>