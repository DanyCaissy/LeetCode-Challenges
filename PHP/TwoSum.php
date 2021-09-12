// https://leetcode.com/submissions/detail/553348624/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) 
    {
        // [value] => Key
        $array_of_keys = [];
        
        foreach ($nums as $key => $value)
        {
            // If the current value + a previous value equal to the $target
            if (isset($array_of_keys[$target - $value]))
            {
                return [$key, $array_of_keys[$target - $value]];
            }
            else // Keep this value in our array of keys
            {
                $array_of_keys[$value] = $key;
            }
        }
    }
}
