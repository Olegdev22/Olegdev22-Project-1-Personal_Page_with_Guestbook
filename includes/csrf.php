<?php

declare(strict_types=1);

const CSRF_TOKEN_LENGHT = 32;
const CSRF_TOKEN_LIFETIME = 60 * 30; // 30 minutes
function generateCSRFToken(): string
{
    $token = bin2hex(random_bytes(CSRF_TOKEN_LENGHT));
    setCSRFTokenAndTime($token);
    return $token;
}

function getCSRFTokenAndTime(): array
{
    return [
        $_SESSION['csrf_token'] ?? null,
        $_SESSION['csrf_token_time'] ?? null
    ];
}

function setCSRFTokenAndTime(string $token): void
{
    $_SESSION['csrf_token'] = $token;
    $_SESSION['csrf_token_time'] = time();
}

function isTokenExpired(?int $time): bool
{
    return $time === null || (time() - $time) > CSRF_TOKEN_LIFETIME;
}

function getCurrentCSRFToken(): string
{
    [$token, $time] = getCSRFTokenAndTime();
    // 1. To check if there is a valid, non-expired token already
    // return if it exists
    if (!isset($token, $time) || isTokenExpired($time)) {
        return generateCSRFToken();
    }
    return $_SESSION['csrf_token'];
    // 2. Generate a new one
    // return it

}


function validateCSRFToken(?string $token): bool
{
    return false;
}