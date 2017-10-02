<?php
for ($number = 0; $number <= 100; $number++) {
 if ($number % 3 == 0) {
  echo 'Fizz';
}
 if ($number % 5 == 0) {
  echo 'Buzz';
}
 if ($number % 3 AND 5 == 0) {
  echo 'FizzBuzz';
  echo $number.' ';
  }
 }
?>
