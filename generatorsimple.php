<?php
function generator_simple() {
	yield 1;
	yield 2;
	yield 3;
}

$elems = generator_simple();
foreach ($elems as $elm) echo $elm . "\n";