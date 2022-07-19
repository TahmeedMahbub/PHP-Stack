<?php

// include('stack.php');
require "stack.php";

$st=new Stack(4);

$st->push(10);
$st->push(3);
$st->push(10);
$st->push(3);
$st->show();
$st->pop();
$st->show();


// $st->isFull();
// $st->push(4);
// $st->isEmpty();
// $st->push(6);
// $st->push(4);
// $st->push(7);
// $st->push(2);
// $st->push(8);
// $st->push(1);
// $st->push(3);
// $st->pop();
// $st->peek();
// $st->pop();
// $st->push(1);
// $st->push(9);
// $st->pop();
// $st->push(2);
// $st->push(8);
// $st->push(1);
// $st->push(2);
// $st->isFull();

// $st->show();

?>