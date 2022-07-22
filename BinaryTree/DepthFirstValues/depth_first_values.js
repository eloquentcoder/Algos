// this is a node class used to represent a node in a binary tree.
class Node {

    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}

// for every binary tree question you will be passed the root node. The root node will have left and right values
function depthFirstValuesRecursive(root) {
    // if the current root that we are looking at it null, we return an empty array.
    if (root == null) return [];

    // do a recursive function on the left values and the right values of the root. This will the applicable as we traverse
    // down the tree
    var leftValues = depthFirstValuesRecursive(root.left);
    var rightValues = depthFirstValuesRecursive(root.right);

    //  Using the spread operator, merge the values of the current value the left values and the right values into an array and return it.
    // You can read more on the spread operator here https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Spread_syntax
    return [root.value, ...leftValues, ...rightValues];
}

function depthFirstValuesIterative(root) {
    // initialize the result array that we will return to the array
    var result = [];

    // initialize a stack datastructure that we will use to traverse the tree and pass the root node into it
    var stack = [root];

    // while the stack is not empty traverse the tree
    while (stack.isNotEmpty) {
        // remove the last top element from the stack and push it into the result array
        var current = stack.removeLast();

        // if the left and right children are not empty, push them to the top of the stack
        if (current.left != null) stack.add(current.left);
        if (current.right != null) stack.add(current.right);
    }

    // while you are done with the loop, return the populated result;
    return result;
}

$a = new Node("a");
$b = new Node("b");
$c = new Node("c");
$d = new Node("d");
$e = new Node("e");
$f = new Node("f");


$a.left = $b;
$a.right = $c;
$b.left = $d;
$b.right = $e;
$c.right = $f;

console.log(depthFirstValuesRecursive($a));