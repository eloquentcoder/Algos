<?php

// A node class has a a value property which will contain data for the node and a next node to point to the next node
// and in case we are dealing with a doubly linked list the prev node for pointing to the previous node
class Node {
    public $value;
    public ?Node $next;
    public ?Node $prev;

    public function __construct($value) {
        $this->value = $value;
    }
}


function linkedListValues(Node $head)
{
    // initialize a result array to return at the end of the function
    $result = [];
    
    // initialize a current variable and set it to the head node
    $current = $head;

    // while current is not null
    while ($current) {
        // push the value of current to the end of the result array
        array_push($result, $current->value);
        // set the current to the previous current's next. At any point the current is null 
        // we break out of the loop
        $current = $current->next;
    }
    // return result
    return $result;
}


$x = new Node("x");
$y = new Node("y");

$x->next = $y;

print_r(linkedListValues($x));