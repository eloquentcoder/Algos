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


// for every binary tree question you will be passed the root node. The root node will have left and right values
function depthFirstValuesIterative(Node $root)
{
    if($root == null) return [];
    // initialize the result array that we will return to the array
    $result = [];

    // initialize a stack datastructure that we will use to traverse the tree and pass the root node into it
    $stack = [$root];


    // while the stack is not empty traverse the tree
    while (count($stack) > 0) {

        // remove the last top element from the stack and push it into the result array
        $current = array_pop($stack);
        array_push($result, $current->value);

        // if the left and right children are not empty, push them to the top of the stack
        if ($current->right) array_push($stack ,$current->right);
        if ($current->left) array_push($stack ,$current->left);
     }

     // while you are done with the loop, return the populated result;
     return $result;

}

// for every binary tree question you will be passed the root node. The root node will have left and right values
function depthFirstValuesRecursive(?Node $root)
{
    // if the current root that we are looking at it null, we return an empty array.
    if($root == null) return [];
    

    // do a recursive function on the left values and the right values of the root. This will the applicable as we traverse
    // down the tree
    $leftValues = depthFirstValuesRecursive($root->left);
    $rightValues = depthFirstValuesRecursive($root->right);

    // unpack the values of the current value, the left values and the right values into an array and return it
    return [$root->value, ...$leftValues, ...$rightValues];
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

print_r(depthFirstValuesRecursive($a));