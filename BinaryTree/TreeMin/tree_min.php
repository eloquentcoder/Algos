<?php

// this is a node class used to represent a node in a binary tree.
class Node
{
    public $value;
    public ?Node $left;
    public ?Node $right;

    public function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

function treeMin(?Node $root)
{
    if($root == null) return INF;
    $leftMin = treeMin($root->left);
    $rightMin = treeMin($root->right);
    return min($root->value, $leftMin, $rightMin);
}

$a = new Node(6);
$b = new Node(14);
$c = new Node(30);
$d = new Node(21);
$e = new Node(9);
$f = new Node(11);

    //         a
    //     b       c  
    // d       e       f

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->right = $f;

var_dump(treeMin($a));

