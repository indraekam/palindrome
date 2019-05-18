<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
       if(strcasecmp(strrev($word),$word)==0){
           return true;
       }
        else {
            return false;
        } 
    }
}

echo Palindrome::isPalindrome('Deleveled');
?>
