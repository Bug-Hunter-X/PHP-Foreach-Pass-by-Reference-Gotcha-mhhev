```php
function processData(array $data): array {
  foreach ($data as &$value) {
    if (is_string($value)) {
      $value = strtolower($value);
    }
  }
  return $data;
}

$data = ['apple', 'Banana', 'Orange'];
$processedData = processData($data);
print_r($processedData);
```