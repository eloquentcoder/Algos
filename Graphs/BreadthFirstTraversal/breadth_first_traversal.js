
function breadthFirstTraversal(graph, source)
{
    const queue = [source];
    let result = [];

    while (queue.length > 0)
    {
        let current = queue.shift();
        console.log(current);
        for (const neighbor of graph[current]) {
            queue.push(neighbor);
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


console.log(breadthFirstTraversal(graph, "a"));

