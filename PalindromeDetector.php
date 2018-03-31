<?php

/**
 * This class can find longest substring palindrome in target string
 * or just detect if whole target string is palindrome or not
 * Usage:
 *      $pd = new PalindromeDetector();
 *      $palindrome_substring = $pd->findPalindrome($targetString);
 *      $bool_result = $pd->isPalindrome($targetString);
 */
class PalindromeDetector
{
    /**
     * find longest substring Palindrome
     * if there is no one, return first letter of string
     * @param  string $str
     * @return string
     */
    public function findPalindrome($str)
    {
        $cnt = mb_strlen($str);
        for ($i=$cnt; $i > 0; $i--) { 
            foreach ($this->getSubstrings($str, $i) as $substring) {
                if($this->isPalindrome($substring)){
                    return $substring;
                }
            }
        }
    }

    /**
     * get array of all substrings of length $len from target string
     * except substrings begins or ends with witespaces
     * @param  string $str
     * @param  int    $len
     * @return array
     */
    protected function getSubstrings($str, $len)
    {
        if(mb_strlen($str) < $len){
            throw new InvalidArgumentException("Length of substring ${len} more then length of string \"${str}\"");
        }
        $cnt = mb_strlen($str) - $len + 1;
        $substrings = array();
        for ($i=0; $i < $cnt; $i++) { 
            $substr = mb_substr($str, $i, $len);
            if(!preg_match('/(^ | $)/u', $substr)){
                $substrings[] = $substr;
            }
        }
        return $substrings;
    }

    /**
     * detect if target string is palindrome or not
     * @param  string $str
     * @return boolean
     */
    public function isPalindrome($str)
    {
        $str = mb_strtolower($str);
        $str = mb_ereg_replace(' ', '', $str);

        // not use strrev because of multibyte strings
        $char_array = preg_split('//u', $str);
        $revert_str = implode('', array_reverse($char_array));
        return $str == $revert_str;
    }
}