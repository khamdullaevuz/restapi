<?php

$json = json_encode($content);

header('Content-type: application/json');

echo $json;
