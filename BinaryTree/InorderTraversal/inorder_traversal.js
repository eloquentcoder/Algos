// this is a node class used to represent a node in a binary tree.
class Node {

    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}



function inorderTraversal(root) {
    let result = [];
    let stack = [];
    let current = root;

    while (current || stack.length > 0) {

        while (current) {
            stack.push(current);
            current = current.left;
        }

        current = stack.pop();
        result.push(current.value);
        current = current.right;
    }

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

console.log(inorderTraversal($a));