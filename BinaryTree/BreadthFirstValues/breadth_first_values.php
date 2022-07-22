<?php


// this is a node class used to represent a node in a binary tree.
class Node {
    public $value;
    public ?Node $left;
    public ?Node $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

function breadthFirstValues(?Node $root)
{
    $result = [];
    $queue = [$root];

    while (count($queue) > 0) {
        $current = array_shift($queue);
        array_push($result, $current->value);
        if($current->left) array_push($queue ,$current->left);
        if($current->right) array_push($queue ,$current->right);
    }
    return $result;
}


$a = new Node("a");
$b = new Node("b");
$c = new Node("c");
$d = new Node("d");
$e = new Node("e");
$f = new Node("f");


$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->right = $f;

print_r(breadthFirstValues($a));