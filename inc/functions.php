<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = [
    [
        'quote'=>'"However [political parties] may now and then answer popular ends, they are likely in the course of time and things, to become potent engines, by which cunning, ambitious, and unprincipled men will be enabled to subvert the power of the people and to usurp for themselves the reins of government, destroying afterwards the very engines which have lifted them to unjust dominion."',
        'source'=>'George Washington',
        'citation'=>'farewell address',
        // Concept gotten from @ https://www.w3schools.com/html/html_blocks.asp
        // Colors gotten from @ https://w3bits.com/rainbow-text/
        'style'=>
        'font-size:3rem;
        font-style:italic;'
    ],
    [
        'quote'=>'We the People of the United States, in Order to form a more perfect Union, establish Justice, insure domestic Tranquility, provide for the common defence, promote the general Welfare, and secure the Blessings of Liberty to ourselves and our Posterity, do ordain and establish this Constitution for the United States of America.',
        'source'=>'The Constitution of the United States'
    ],
    [
        'quote'=>'Anakin, I told you it would come to this! I was right! The Jedi are taking over!',
        'source'=>'Chancellor Palpatine',
        'citation'=>'Star Wars: Revenge of the Sith',
        'year'=>'May 19, 2005'
    ],
    [
        'quote'=>'To ensure the security and continuing stability, the Republic will be reorganized into the first Galactic Empire! For a safe, and secure, society!',
        'source'=>'Chancellor Palpatine',
        'citation'=>'Star Wars: Revenge of the Sith',
        'year'=>'May 19, 2005'
    ],
    [
        'quote'=>'The attempt on my life has left me scarred, and deformed. But I assure you, my resolve has never been stronger.',
        'source'=>'Chancellor Palpatine',
        'citation'=>'Star Wars: Revenge of the Sith',
        'year'=>'May 19, 2005',
        'style'=>'        
        font-size:5rem;
        font-style:bold;
        color: blue'
    ]
    ];

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote() {
    global $quotes;
    # Got this from php docs, get's random key & uses it to get an element from quotes
    return  $quotes[array_rand($quotes)];
}

// Create the printQuote funtion and name it printQuote
function printQuote() {
    // Getting random quote
    $quote = getRandomQuote();

    // Getting quote elements
    $quote_text = $quote['quote'];
    $author = $quote['source'];
    $citation = $quote['citation'];
    $year = $quote['year'];
    $style = $quote['style'];

    // Prints quote with it's style
    echo '<p class="quote" ';

    // If there is a style defined use it else defult to quote class
    if($style !== null) {echo 'style=\'' . $style . '\'>';}
    else {echo '>';}

    // Prints quote
    echo $quote_text . "</p>\n\t  ";


    // Citation stuff
    echo '<p class="source">' . $author;

    // If there is a place to cite
    if($citation !== null) {echo "\n\t\t" . '<span class="citation">' . $citation . '</span>';}

    // If there is a year to cite
    if($year !== null) {echo "\n\t\t" . '<span class="year">' . $year . '</span>';}
    echo "\n\t  </p>\n";
}


function bodyStart() {
    $colors = ['#36b55c', '#f6b55c', '36b5fc', '#f60efc'];
    # Makes the body with a color style
    echo '<body style="';
    echo 'background-color: ' . $colors[array_rand($colors)] . ';">';
}
?>