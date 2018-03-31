#### about
This php class solve task to find longest palindrome substing in target string. If there is no palyndrome substring, it returns first letter of target string.

#### run example script
```sh
php example.php
```

#### use class in code
find palindrome substring
```php
$pd = new PalindromeDetector();

$targetString = 'Beautiful madam';
$palindromeSubstring = $pd->findPalindrome($targetString);
// now $palindromeSubstring = 'madam'
```

detect if target string is palindrome or not
```php
$pd = new PalindromeDetector();

$palindrome = 'madam';
$notPalindrome = 'not palindrome';

// TRUE
$result = $pd->isPalindrome($palindrome);

// FALSE
$result = $pd->isPalindrome($notPalindrome);
```