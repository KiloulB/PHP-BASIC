<?php
$_test1_ = 10;
$_test2_ = 10;

if ($_test1_ == $_test2_) {
    echo "Gelijk!";
//   } elseif ($_test1_ == $_test2_) {
//     echo "Identiek";
  } else {
    echo "Ongelijk!";
  }

  echo "<br>";

  if ($_test1_ === $_test2_){
    echo "Identiek";
}
echo "<br>";
if ($_test1_ > $_test2_){
    echo "Test 1 is groter dan Test 2";
} else {
    echo "Test 1 is kleiner dan test 2";
}

echo "<br>";
if ($_test1_ >= $_test2_){
    echo "Test 1 is groter of gelijk aan Test 2";
} 
?>