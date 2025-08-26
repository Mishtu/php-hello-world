<?php
require __DIR__ . '/vendor/autoload.php';
use Carbon\Carbon;
echo "Hello, PHP!\n";
echo "Текущее время: " . Carbon::now()->toDateTimeString() . "\n";
?>
