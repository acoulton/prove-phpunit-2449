<?php
if (isset($_ENV['CUSTOM_ERROR_TRAP']) && $_ENV['CUSTOM_ERROR_TRAP']) {
    fwrite(STDOUT, 'Using custom error trap'."\n");

    set_error_handler(
        function ($severity, $message, $file, $line) {
            throw new ErrorException($message, 0, $severity, $file, $line);
        }
    );
}
