<?php
include_once('PalindromeDetector.php');
$pd = new PalindromeDetector();

echo $pd->findPalindrome('Аргентина манит негра'), "\n";
echo $pd->findPalindrome('Далекая аргентина манит негра'), "\n";
echo $pd->findPalindrome('Sum summus mus'), "\n";
echo $pd->findPalindrome('Не полиндром'), "\n";