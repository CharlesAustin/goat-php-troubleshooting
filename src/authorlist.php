<?php

/**
 * dev_test - error-handling.php
 *
 * @author Darren James Harkness
 */

// Let's set up our text to be displayed.
$text = "We're going to search for authors with the last name 'Harkness' and see what comes back!\n\n";

// Grab a list of authors from the Random House Publishing API, and pop it into
// the $text directory.

$output = get_author_list();
$text .= "{$output}\n\n";

$text .= "Here's what I found!.\n\n";

print $text;

function get_author_list() {
    $api_url = "https://reststop.randomhouse.com/resources/authors?lastName=Harkness";
    $booklist = call_api($api_url);

    $output = "Here is a list of authors I found:\n\n";

    foreach ($booklist as $book) {
        $output .= "  - {$book->authordisplay}\n";
    }

    return $output;

}


function call_api($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $api_return = json_decode(curl_exec($ch));
    curl_close($ch);

    return $api_return;

}



