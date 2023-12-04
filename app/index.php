<?php

use framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = "Hello World!";

require '../resources/views/index.blade.php';