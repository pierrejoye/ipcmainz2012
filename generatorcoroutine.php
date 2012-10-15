<?php 
function gen() {
    echo 'start' . "\n";
    yield 'middle' . "\n";
    echo 'end' . "\n";
}
 
// Initial call does not output anything
echo "gen();\n";
$gen = gen();
 
// Call to current() resumes the generator, thus "start" is echo'd.
// Then the yield expression is hit and the string "middle" is returned
// as the result of current() and then echo'd.
echo "gen->current();\n";
echo $gen->current();
 
// Execution of the generator is resumed again, thus echoing "end"
echo "gen->next();\n";
$gen->next();
