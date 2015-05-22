<?php

require_once('../vendor/autoload.php');
require_once('classes.php');

$collection = \WNowicki\Collections\ScalarCollection::make(\WNowicki\Collections\ScalarCollection::TYPE_INT);

$collection->add(44)->add(35)->add(99)->add(25);

echo "\n\nTesting Integer Collection\n\n";

foreach ($collection as $element) {

    var_dump($element);
}

try {
    $collection->add('w');
} catch (Exception $e) {

    echo "\nException: " . $e->getMessage() . "\n\n";
}

unset($collection);

$collection = \WNowicki\Collections\ObjectCollection::make('\Fruit');

$collection->add(new Apple())->add(new Orange())->add(new Apple());

echo "\n\nTesting Object Collection\n\n";

foreach ($collection as $element) {

    var_dump($element);
}

try {
    $collection->add(new stdClass());
} catch (Exception $e) {

    echo "\nException: " . $e->getMessage() . "\n\n";
}
