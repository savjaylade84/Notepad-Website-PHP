<?php
function loadEnv($path) {
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comment lines starting with #
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split the line at the first "=" sign
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        // Remove quotes if present
        $value = trim($value, '"\'');

        // Set the environment variables
        putenv(sprintf('%s=%s', $name, $value));
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }
}

// Automatically load it from the current folder
loadEnv(__DIR__ . '/.env');
?>
