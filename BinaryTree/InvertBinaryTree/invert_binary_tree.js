// this is a node class used to represent a node in a binary tree.
class Node {

    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}

function invertBinaryTree(root) 
{
    if (root == null) return null;

    let temp = root.left;
    root.left = root.right;
    root.right = temp;

    invertBinaryTree(root.left);
    invertBinaryTree(root.right);
    return root;
}