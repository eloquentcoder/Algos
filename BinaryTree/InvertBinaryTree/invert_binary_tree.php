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

function invertBinaryTree(?Node $root)
{
    if($root == null) return null;

    $temp = $root->left;
    $root->left = $root->right;
    $root->right = $temp;

    invertBinaryTree($root->left);
    invertBinaryTree($root->right);

    return $root;
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


print_r(invertBinaryTree($a));