<?php
$users = [
    ['Foo', 'Bar'],
    ['Baz', 'Qux']
];
 
// Before
foreach ($users as $user) {
    list($firstName, $lastName) = $user;
    echo "First name: $firstName, last name: $lastName. <br />\n";
}
 
// After
foreach ($users as list($firstName, $lastName)) {
    echo "First name: $firstName, last name: $lastName. <br />\n";
}