
// A node class has a a value property which will contain data for the node and a next node to point to the next node
// and in case we are dealing with a doubly linked list the prev node for pointing to the previous node
class Node {
    constructor(val) {
        this.val = val;
        this.next = null;
    }
}


const linkedListValues = (head) => {
    // initialize a result array to return at the end of the function
    let result = [];

    // initialize a current variable and set it to the head node
    let current = head;

    // while current is not null
    while (current) {
        // push the value of current to the end of the result array 
        result.push(current.val);
        // set the current to the previous current's next. At any point the current is null 
        // we break out of the loop
        current = current.next;
    }
    // return the result
    return result;
};

const x = new Node("x");
const y = new Node("y");

x.next = y;

console.log(linkedListValues(x));