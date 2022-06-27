<?php

require 'vender/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;
