// https://leetcode.com/submissions/detail/558415924/?from=explore&item_id=674

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) 
    {
        $intersection_array = [];
        // Creates arrays that contain the occurrences of each values
        $nums1_occurrences = array_count_values($nums1);
        $nums2_occurrences = array_count_values($nums2);
        
        // Go through only the first array
        foreach ($nums1_occurrences as $value => $number_of_occurrences)
        {
            // If one value has 1+ occurrences in both arrays, add those values to the intersection array
            if (isset($nums2_occurrences[$value]))
            {
                $values_to_add = array_fill(0, min($number_of_occurrences, $nums2_occurrences[$value]), $value);
                $intersection_array = array_merge($intersection_array, $values_to_add);
            }
        }
                
        return $intersection_array;
    }
}
