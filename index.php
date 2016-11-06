<?php

require './vendor/autoload.php';

use MarkdownParser\Parser\RegexParser;
use MarkdownParser\Rule\RegexRules;

$parser = new RegexParser(new RegexRules());

echo $parser->parseFile('example.txt');
