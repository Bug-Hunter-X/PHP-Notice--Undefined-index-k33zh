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

// This will throw a warning because is_array is called on a null
$result = my_function(null);
echo $result;
```