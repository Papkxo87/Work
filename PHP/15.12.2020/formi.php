<?php
$fo1 = $_POST["fo1"];
$fo2 = $_POST["fo2"];

if ($fo1 <= $fo2) {
    echo $fo2;
} else {
    echo $fo1;
}
