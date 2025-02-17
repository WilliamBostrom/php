<?php

$status = 200;

$message = match($status) {
    200 => "OK",
    404 => "Not Found",
    500 => "Internal Server Error",
    default => "Unknown status",
};

echo $message;

?>