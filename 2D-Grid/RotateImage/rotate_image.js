function rotateImage(matrix)
{
    // initialize the left and right pointers to be the first and
    // last outermost elements at the outermost parts of the grid
    var left = 0;
    var right = matrix.length - 1;

    // initialize a while loop as long as left is less than right.
    // we need this as we will need to keep track of the outermost
    // part of the grid. When we finish rotating the outermost part we 
    // need to rotate the innermost parts. The left and right pointers
    // will help with that. 
    while (left < right) {
        // we iterate over the column. Since we would
        // be rotating the outermost parts we do not need
        // to iterate to the last element. 
        for (i = 0; i < (right - left); i++) {
            // Since it is a square, the values of left and right
            // will be the same with the top and bottom. We also need to
            // keep track of this as we are going to rotate the outermost parts
            // first before moving in

            var top = left;
            var bottom = right;

            // we need to swap the values in place i times.
            // we start by initializing a temp top left variable
            // to hold the previous top left
            topLeft = matrix[top][left + i];

            // the top left should plus i should be filled with the bottom plus i
            // left
            matrix[top][left + i] = matrix[bottom - i][left];

            // the bottom left minus  i should be filled with the bottom 
            // right minus i 
            matrix[bottom - i][left] = matrix[bottom][right - i];

            // the bottom right minus i should be filled with the top minus i 
            // right 
            matrix[bottom][right - i] = matrix[top + i][right];

            // the top plus i right should be filled with the top left
            // that was saved
            matrix[top + i][right] = topLeft;
        }
        // we decrement right and increment left to move inside the matrix
        left += 1;
        right -= 1;
    }

    return matrix;
}

console.log(rotateImage([[1, 2, 3], [4, 5, 6], [7, 8, 9]]));
