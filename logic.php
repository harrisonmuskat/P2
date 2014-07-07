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

$symbol = range('!','@');
$symbol = (array_merge(array_splice($symbol, 0, 15), array_splice($symbol, 25, 7)));
//print_r($symbol);

// Initializes $num_Words as the user's requested number of words
if (array_key_exists('words', $_POST)){
	$num_Words = $_POST['words'];
}

// Initializes $pw as an empty string
$pw = '';

// Loops through $wordlist the number of times the user requested a word
if(isset($num_Words)){
	for($i = 0; $i < $num_Words; $i++){
		// Adds a randomly selected word from $wordlist to $pw
		if ($i == 0) {
			$pw .= $wordlist[0][rand(0,4999)];
		}
		else {
			$pw .= '-'.$wordlist[0][rand(0,4999)];
		}
	}
}

if (array_key_exists('number', $_POST)) {
	$pw .= rand(0,20);
}

if (array_key_exists('symbol', $_POST)) {
	$pw .= $symbol[rand(0,14)];
}

if (array_key_exists('uppercase', $_POST)) {
	$pw = ucfirst($pw);
}

echo $pw;
?>