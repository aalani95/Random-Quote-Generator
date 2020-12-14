<?php

// storage to store qoutes data
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

// Get random element from a multi-dem array, used later to pass $qoutes
function getRandomQuote($array){
    $randKey = array_rand($array);
    return $array[$randKey];
}

// Print the randomly generated array element, $qoutes is passed as argument on execution 
function printQuote($array){
    // Get the random value generatd from the above function
    $targetPrint = getRandomQuote($array);

    // Output html
    $html_string = '<p class="quote">' . $targetPrint["quote"] . '</p>';
    $html_string .= '<p class="source">' . $targetPrint["source"];

    if(isset($targetPrint['citation'])) {
        $html_string .= '<span class="citation">' . $targetPrint["citation"] . '</span>';
    }

    if(isset($targetPrint['year'])) {
        $html_string .= '<span class="year">' . $targetPrint["year"] . '</span>';
    }

    if(isset($targetPrint['tag'])) {
        $html_string .= '<span class="tag">' . $targetPrint["tag"] . '</span>';
    }

    $html_string  .= "</p>";
    echo $html_string;

 }

?>