<?php

function connectDB(): PDO
{
    $pdo = new PDO('sqlite:' . DB_DIR . '/' .  'db.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function loadSchema(PDO $pdo, string $schemaFile): void
{
    $sql = file_get_contents($schemaFile);
    if (false === $sql) {
        die("Failed to read schema file: $schemaFile");
    }
    $pdo->exec($sql);
    echo "Database schema loaded successfully.\n";
}
