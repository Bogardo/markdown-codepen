<?php

require 'vendor/autoload.php';
require 'Markdown.php';

$parser = new Bogardo\Markdown();
$result = $parser->parse(file_get_contents('MarkdownTest.md'));

echo $result;
?>
<script async src="//codepen.io/assets/embed/ei.js"></script>