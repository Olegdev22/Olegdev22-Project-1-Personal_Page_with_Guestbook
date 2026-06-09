<?php

function exceptionHandler(Throwable $exception): void
{
    $message = "Uncaught exception: (" . get_class($exception) . "): " . $exception->getMessage() . " in file: " . $exception->getFile() . " on line " . $exception->getLine();
    error_log($message);

    serverError("An unexpected error occurred. Please try again later.");
}


function errorHandler(int $errno, string $errstr, string $errline, int $errfile): bool
{
    $message = "Error [$errno] $errstr on line $errline in file $errfile";
    error_log($message);

    serverError("An expected error occurred. Please try again later.");

    return true;
}
