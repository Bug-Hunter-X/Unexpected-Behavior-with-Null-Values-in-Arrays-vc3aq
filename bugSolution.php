function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value !== null) {
      // Some operations on $value
    } else {
      // Handle the null value appropriately
      // For example, you might skip it, use a default value, or throw an exception
      echo "Null value encountered\n";
    }
  }
}

$arr = [1, 2, 3, null];
foo($arr); 