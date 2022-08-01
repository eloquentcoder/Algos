function mergeIntervals(intervals) {
    // first sort the
    // intervals so that comparing intervals will be easier
    intervals.sort();


    // initialize an output array that we would 
    // return at the end and then add the first interval into it.
    // it will be the starting point of our merge comparison
    let output = [intervals[0]];

    // loop over the intervals and start from 
    // the second element as we have already added the 
    // first interval into the output array
    for (let i = 1; i < intervals.length; i++) {
        // get the last interval in the output array
        let prev = output[output.length - 1];

        // you can initialize a current variable and
        // add the current interval to it
        let current = intervals[i];

        // if the start of the interval is less than 
        // or equal the previous interval's end, then it
        // means it is overlapping
        if (current[0] <= prev[1]) {
             // you can merge the intervals by keeping the start of the last
            // interval in the output array and then update the end of that 
            // interval with the max of the previous interval's end and the current interval's end
            // i.e whichever number is bigger between the end of
            // the previous interval and the current interval
            output[output.length - 1][1] = Math.max(prev[1], current[1]);
        } else {
            // if the intervals are not merging then add it to the output array
            output.push(current);
        }

    }

    // return the output array;
    return output;

}

console.log(merge([[1,4],[4,5]]));