```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $newData[] = strtolower($value);
    } else {
      $newData[] = $value; // Handle non-string values
    }
  }
  return $newData;
}

$data = ['apple', 'Banana', 'Orange'];
$processedData = processData($data);
print_r($processedData);
```