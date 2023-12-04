<?php

use framework\App;

$tasks = App::get('database')->selectAll('users');

$greeting = "Hello World!";

require '../resources/views/users.blade.php';