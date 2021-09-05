<?php

$result = $app['database']->selectAll('users');
if ($result)
    $content = array('ok' => true, 'result' => $result);
else $content = array('ok' => false, 'description' => 'This is values nothing found!');

require 'views/index.php';
