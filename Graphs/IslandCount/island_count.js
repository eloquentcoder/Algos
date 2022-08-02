const islandCount = (grid) => {
    // initialize the resulting count as 0
    let count = 0;

    // we also initialize a visited set to store if a node
    // has been visited
    let visited = new Set();

    // we should carry a double for loop to iterate through the 
    // the grid so we can make sure all nodes/positions are
    // checked
    for (let r = 0; r < grid.length; r++) {
        for (let c = 0; c < grid[0].length; c++) {
            // we create a recursive helper function that returns a 
            // boolean. The helper function does a depth first search
            // on every node to check if it as valid island
            if (explore(grid, r, c, visited) == true) {
                count += 1;
            }
        }
    }

    // return the count variable.
    return count;

};

// the helper function takes in the grid, the r position we are currently in
// the c position we currently in and the visited set
const explore = (grid, r, c, visited) => {
    // the first check is to check whether we are inbounds to the
    // left, right, top and bottom. This means do a check to make 
    // sure we are not out of the grid. 
    let rowInbounds = r >= 0 && r < grid.length;
    let colInbounds = c >= 0 && c < grid[0].length;
  
    // if we are actually out of the grid, we just return false.
    if(!rowInbounds || !colInbounds) return false;
  
    // if we are currently looking at water, we return false
    if(grid[r][c] === '0') return false;
  
    // we need a way to store a node/position into our visited set.
    // one way we can do it is to concatenate the r and c position and 
    // save that into our visited set as a visited position
    let currPos = r+"."+c;

    // if the current position has already been visited we return false
    // if it hasnt we add it to the visited set
    if(visited.has(currPos)) return false;
    visited.add(currPos);
  
    // now we explore all the neighbours of our current position to the left and to the 
    // right, to the top and to the bottom. We know that once we have gotten
    // here we are already at an island.
    explore(grid, r - 1, c, visited);
    explore(grid, r + 1, c, visited);
    explore(grid, r, c - 1, visited);
    explore(grid, r, c + 1, visited);
  
    // we return true;
    return true;
}

let grid = [
    ["1", "1", "0", "0", "0"],
    ["1", "1", "0", "0", "0"],
    ["0", "0", "1", "0", "0"],
    ["0", "0", "0", "1", "1"]
];

console.log(islandCount(grid));