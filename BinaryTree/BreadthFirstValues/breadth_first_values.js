
// this is a node class used to represent a node in a binary tree.
class Node {

    constructor(value) {
        this.value = value;
        this.left = null;
        this.right = null
    }
}

function breadthFirstValues(root) {
    // initialize the result array that we will return to the array
    var result = [];

    // initialize a queue datastructure that we will use to traverse the tree and pass the root node into it
    var queue = [root];

    // while the queue is not empty traverse the tree
    while (count(queue) > 0) {
        // remove the botton element from the queue and push it into the result array
        var current = queue.shift();

        // if the left and right children are not empty, push them to the top of the queue
        if (current.left != null) queue.add(current.left);
        if (current.right != null) queue.add(current.right);
    }

    // while you are done with the loop, return the populated result;
    return result;
}