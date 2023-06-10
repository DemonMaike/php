<H1>HELLLO</H1>
<?php

// look how create func on php
$foo = true;
function getCounter()
{
    global $foo;
    if ($foo)
        echo "foo";
    else
        echo "not foo";
    echo "<br>";
}

getCounter();

// a work with cycle

echo "<h1>Cycle</h1>";
echo "<h2>While</h2>";
$num = 1;

while($num<=70) {
    echo "Interation number: $num<br>";
    $num += 10;
}

echo "<h2>Do ... While</h2>";

$num = 1;

do {
    echo "Interation number: $num<br>";
    $num ++;
} while ($num<=7);

echo "<h2>Cycle For</h2>";

for ($i=0; $i<5; $i++) {
    echo $i.',';
}

echo "<h2>Foreach</h2>";

$colors = array('red','blue','yellow');

foreach ($colors as $i) {
    echo "$i<br>";
}

foreach ($colors as $key=>$value) {
    echo "$key $value<br>";
}

?>
