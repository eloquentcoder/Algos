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

// write a function that checks if the target exists in the 
// binary tree
function treeIncludes($root, $target)
{
    if($root == null) return false;
    if($root->value == $target) return true;
    return treeIncludes($root->left, $target) || treeIncludes($root->right, $target);
}

$a = new Node("a");
$b = new Node("b");
$c = new Node("c");
$d = new Node("d");
$e = new Node("e");
$f = new Node("f");

    //         a
    //     b       c  
    // d       e       f

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->right = $f;


var_dump(treeIncludes($a, "e"));