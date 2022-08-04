// this is a node class used to represent a node in a binary tree.
class Node {
    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}

function treeMin(root)
{
    if (root == null) return Infinity;
    minLeft = treeMin(root.left);
    minRight = treeMin(root.right);

    return Math.min(root.value, minLeft, minRight);
}

a = new Node(2);
b = new Node(11);
c = new Node(23);
d = new Node(20);
e = new Node(9);
f = new Node(8);

    //         a
    //     b       c  
    // d       e       f

a.left = b;
a.right = c;
b.left = d;
b.right = e;
c.right = f;

console.log(treeMin(a));
