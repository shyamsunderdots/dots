<?php
$array = array('a' => array('b', 'c' => array('d', 'e' => array('f', 'g'))));

$iterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator($array),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $key => $item) {
    if (is_array($item) && $key === 'xyz') {
        echo "Found xyz: ";
        var_dump($item);
    }
}

echo "<pre>";
print_r($iterator);
echo "</pre>";
?>