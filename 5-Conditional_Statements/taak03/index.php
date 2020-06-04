<?php
$_test1_ = 3;
$_test2_ = 6;

if($_test1_ == $_test2_){
    echo "Gelijk";
} else{ 
    echo "Niet Gelijk";
}

echo "<br>";

if($_test1_ != $_test2_){
    echo "Ongelijk";
} else{ 
    echo "Wel Gelijk";
}

echo "<br>";

if($_test1_ === $_test2_){
    echo "Identiek";
} else{ 
    echo "Wel Gelijk";
}

echo "<br>";

if($_test1_ < $_test2_){
    echo "Test1 is groter dan Test2";
} else{ 
    echo "Test 1 is kleiner dan Test2";
}

echo "<br>";

if($_test1_ > $_test2_){
    echo "Test1 is kleiner dan Test2";
} else{ 
    echo "Test 1 is groter dan Test2";
}

echo "<br>";

if($_test1_ >= $_test2_){
    echo "Test1 is groter of gelijk aan Test2";
} else{ 
    echo "Test 1 is niet groter of gelijk aan Test2";
}

echo "<br>";

if($_test1_ <= $_test2_){
    echo "Test1 is kleiner of gelijk aan Test2";
} else{ 
    echo "Test 1 is niet kleiner of gelijk aan Test2";
}

