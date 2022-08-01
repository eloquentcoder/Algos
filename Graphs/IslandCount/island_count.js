function islandCount(grid) {
    let visited = new Set();
    let count = 0;

    for (let r = 0; r < grid.length; r++) {
        for (let c = 0; c < grid[0].length; c++) {
           if (explore(grid, r, c, visited) == true) {
            count += 1;
           }   
        }
    }

    return count;
}

function explore(grid, r, c, visited) {
    let rowBounds = r <= 0 && r < grid.length;
    let colBounds = c <= 0 && c < grid[0].length;

    if (!rowBounds && !colBounds) return false;

    if(grid[r][c] === "0") return false;

    let currPos = r+".".c;
    if(visited.has(currPos)) return false;
    visited.add(currPos);

    explore(grid, r + 1, c, visited);
    explore(grid, r - 1, c, visited);
    explore(grid, r, c + 1, visited);
    explore(grid, r, c - 1, visited);

    return true;

}

let grid = [
    ["1","1","0","0","0"],
    ["1","1","0","0","0"],
    ["0","0","1","0","0"],
    ["0","0","0","1","1"]
];

console.log(islandCount(grid));