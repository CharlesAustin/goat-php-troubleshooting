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

function get_author_list()
{
    $api_url = "https://openlibrary.org/search/authors.json?q=Harkness&limit=5";
    $authorlist = call_api($api_url);

    if ($authorlist->numFound === 0) {
        $output = "No authors by that name!";

        return $output;
        
    } else {
        $output = "Here is a list of authors I found:\n\n";

        foreach ($authorlist->docs as $author) {

            $works_url = "https://openlibrary.org/authors/" . $author->key . "/works.json?limit=5";
            $workslist = call_api($works_url);
            $output .= "  - {$author->name}\n";

            if (empty($workslist->entries)) {
                $output .= "   No works for this author!\n";
            } else {
                foreach ($workslist->entries as $work) {
                    $output .= "   * {$work->title}\n";
                }
            }
            
            $output .= "\n";
        }

        return $output;
    }
}


function call_api($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $api_return = json_decode(curl_exec($ch));
    curl_close($ch);

    return $api_return;
}
