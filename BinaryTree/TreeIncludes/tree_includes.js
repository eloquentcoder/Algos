// this is a node class used to represent a node in a binary tree.
class Node {
    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}

function treeIncludes(root, target)
{
    if (root == null) return false;
    if(root.val == target) return true;
    return treeIncludes(root.left) || treeIncludes(root.right);
}


a = new Node("a");
b = new Node("b");
c = new Node("c");
d = new Node("d");
e = new Node("e");
f = new Node("f");

    //         a
    //     b       c  
    // d       e       f

a.left = b;
a.right = c;
b.left = d;
b.right = e;
c.right = f;

console.log(treeIncludes(a, "e"));