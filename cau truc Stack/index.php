<?php
include_once "Stack.php";

    $myBooks = new Stack();
    $myBooks->push(1);
    $myBooks->push(2);
    $myBooks->push(3);
    $myBooks->push(4);
    $myBooks->push(5);
    $myBooks->push(6);
    $myBooks->push(7);
    $myBooks->pop();
    echo "<pre>";
    var_dump($myBooks);
    echo $myBooks->top();
