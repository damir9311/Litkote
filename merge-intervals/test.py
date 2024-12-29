def merge(intervals: list[list[int]]) -> list[list[int]]:
    intervals.sort(key=lambda inter: inter[0])
    merged_intervals = [intervals[0]]

    i = 0
    cnt = len(intervals)
    while i < cnt:
        j = i + 1
        while j < cnt:
            if intervals[j][0] <= merged_intervals[-1][1] <= intervals[j][1]:
                merged_intervals[-1][1] = intervals[j][1]
                i = j
            elif merged_intervals[-1][1] < intervals[j][0]:
                merged_intervals.append(intervals[j])
            j += 1
        i += 1

    return merged_intervals

# intervals = [[1,3], [2,6], [5,6], [8,10], [10,11]]
# intervals = [[1,3],[2,6],[8,10],[15,18]]
# intervals = [[1,4],[0,4]]
# intervals = [[1,3],[2,6],[8,10],[15,18],[0,19]]
intervals = [[1,3],[8,10],[15,18]]
print(intervals)
print(merge(intervals))