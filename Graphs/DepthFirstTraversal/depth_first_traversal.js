
function depthFirstTraversal(graph, source)
{
    const stack = [source];
    let result = [];

    while (stack.length > 0)
    {
        let current = stack.pop();
        console.log(current);
        for (const neighbor of graph[current]) {
            stack.push(neighbor);
        }
    }
    return result;
}


const graph = {
    a: ["b","c"],
    b: ["d"],
    c: ["e"],
    d: ["f"],
    e: [],
    f: []
}


console.log(depthFirstTraversal(graph, "a"));

