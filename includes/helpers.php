
<?php
//source - CSCI E15 provided file

/**
 * Utility function to quickly dump data to the page
 * @param null $mixed
 */
function dump($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

/**
 * Recursively escape HTML entities
 * @param null $mixed
 * @return array|string
 */
function sanitize($mixed = null) {

    if (!is_array($mixed)) {
        return convertHtmlEntities($mixed);
    }

    function array_map_recursive($callback, $array) {
        $func = function ($item) use (&$func, &$callback) {
            return is_array($item) ? array_map($func, $item) : call_user_func($callback, $item);
        };
        return array_map($func, $array);
    }
    return array_map_recursive('convertHtmlEntities', $mixed);
}

/**
 * Escape HTML entities in the given String $str
 * @param $str
 * @return string
 */
function convertHtmlEntities($str) {
    return htmlentities($str, ENT_QUOTES, "UTF-8");
}

// below added by: M Bret Blackford Feb 2019
// returns an array of movie quotes
// quotes from https://www.infoplease.com/arts-entertainment/movies-and-videos/top-100-movie-quotes 
function getRandomMovieQuote(){
    $quotes = [
' "Frankly, my dear, I don\'t give a damn." Gone With the Wind, 1939',
' "I\'m going to make him an offer he can\'t refuse." The Godfather, 1972', 
' "You don\'t understand! I coulda had class. I coulda been a contender. I could\'ve been somebody, instead of a bum, which is what I am." On the Waterfront, 1954',
' "Toto, I\'ve got a feeling we\'re not in Kansas anymore." The Wizard of Oz, 1939',
' "Here\'s looking at you, kid." Casablanca, 1942',
' "Go ahead, make my day." Sudden Impact, 1983',
' "All right, Mr. DeMille, I\'m ready for my close-up." Sunset Blvd., 1950',
' "May the Force be with you." Star Wars, 1977',
' "Fasten your seatbelts. It\'s going to be a bumpy night." All About Eve, 1950',
' "You talking to me?" Taxi Driver, 1976'
];    
    
    $randIndex = array_rand($quotes);
    return $quotes[ $randIndex ];
}
