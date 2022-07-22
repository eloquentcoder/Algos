void main(List<String> args) {
  // inorderTraversal(root)
}

// this is a node class used to represent a node in a binary tree.
class Node {
  dynamic value;
  Node? left;
  Node? right;

  Node(value) {
    this.value = value;
  }
}

inorderTraversal(Node? root) {
  var result = [];
  var stack = [];
  var current = root;

  while (current != null || stack.isNotEmpty) {
    while (current != null) {
      stack.add(current);
      current = current.left;
    }
    current = stack.removeLast();
    result.add(current);
    current = current!.right;
  }

  return result;
}
