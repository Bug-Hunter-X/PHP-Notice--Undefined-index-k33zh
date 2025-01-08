```php
function my_function($arg) {
  if ($arg === null) {
    return 'Argument is null';
  } elseif (is_string($arg)) {
    return strlen($arg);
  } elseif (is_array($arg)) {
    return count($arg);
  } else {
    return 'Invalid argument type';
  }
}

// Proper handling of null values prevents warning
$result = my_function(null);
echo $result;

//Example with array and key check
$myArray = ['a' => 1, 'b' => 2];
if (isset($myArray['c'])) {
  echo $myArray['c'];
} else {
  echo "Key 'c' not found";
}
```