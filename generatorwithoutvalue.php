<?php

function recv() {
    while (true) {
        var_dump(yield);
    }
}

$reciever = recv();
var_dump($reciever->current());
$reciever->send(1);
var_dump($reciever->current());
$reciever->send(2);
var_dump($reciever->current());
$reciever->send(3);
