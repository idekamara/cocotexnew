<?php

$cats = App\Flight::all();

foreach ($cats as $cat) {
    echo $cat->name."<br>";
}
?>