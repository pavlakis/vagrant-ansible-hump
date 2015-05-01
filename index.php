<?php

$output = [
"It's 42!",
"So long, suckers!",
"To infinity and beyond...!",
"BAZINGA!",
"Wibbly-Wobbly, Timey-Wimey stuff...!",
"Greetings and salutations. Nanoo-Nanoo.",
"Live long and prosper."
];


$choice = rand(0, count($output) - 1);

echo $output[$choice] . PHP_EOL;
