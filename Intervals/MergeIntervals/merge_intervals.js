function mergeIntervals(intervals) {
    intervals.sort();

    let output = [intervals[0]];

    for (let i = 1; i < intervals.length; i++) {
        let prev = output[output.length - 1];
        let current = intervals[i];

        if (current[0] <= prev[1]) {
            output[output.length - 1][1] = Math.max(prev[1], current[1]);
        } else {
            output.push(current);
        }

    }

}

console.log(merge([[1,4],[4,5]]));