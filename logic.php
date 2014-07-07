<?php

// Intializes $page as the contents of the HTML file at the link below
$page = file_get_contents('http://www.englishclub.com/vocabulary/common-words-5000.htm');

// Initializes the empty array $wordlist and fills it with all items in $page that are between <li></li> tags
$wordlist = array();
preg_match_all('/<li(.*)<\/li>/', $page, $wordlist);

// Strips <li></li> tags from items in $wordlist
for ($i = 0; $i < 5000; $i++) {
	$wordlist[0][$i] = strip_tags($wordlist[0][$i]);
}

// Initializes an array of symbols and strips out the numbers
$symbol = range('!','@');
$symbol = (array_merge(array_splice($symbol, 0, 15), array_splice($symbol, 25, 7)));

// Initializes $num_Words as the user's requested number of words after checking to see if the user has submitted anything
if (!empty($_POST['words'])){
	$num_Words = $_POST['words'];
}
else {
	// Default value so user sees an initial password upon visiting the page
	$num_Words = 4;
}

// Initializes $pw as an empty string
$pw = '';

// Loops through $wordlist the number of times the user requested a word
for($i = 0; $i < $num_Words; $i++){
	// Adds a randomly selected word from $wordlist to $pw
	if ($i == 0) {
		$pw .= $wordlist[0][rand(0,4999)];
	}
	else {
		$pw .= ' '.$wordlist[0][rand(0,4999)];
	}
}

//Checks if user wants a number (up to 9)
if (array_key_exists('number', $_POST)) {
	for ($i = 0; $i < $_POST['number']; $i++){
		$pw = substr_replace($pw, rand(0,9), rand(0,strlen($pw)), 0);
	}
}

//Checks if user wants any number of symbols up to 9
if (array_key_exists('symbol', $_POST)) {
	for ($i = 0; $i < $_POST['symbol']; $i++){
		$pw = substr_replace($pw, $symbol[rand(0,14)], rand(0,strlen($pw)), 0);
	}
}

//Checks if user wants first letter capitalized
if (array_key_exists('uppercase', $_POST)) {
	$pw = ucfirst($pw);
}

if (array_key_exists('camelcase', $_POST)) {
	$pw = ucwords($pw);
}
?>