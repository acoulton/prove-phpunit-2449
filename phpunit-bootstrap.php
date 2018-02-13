<?php
if (getenv('CUSTOM_ERROR_TRAP')) {
    fwrite(STDOUT, 'Using custom error trap'."\n");

    set_error_handler(
        function ($severity, $message, $file, $line) {
            throw new ErrorException($message, 0, $severity, $file, $line);
        }
    );
}

// support 5.x and 6.x phpunit
if ( ! class_exists('PHPUnit_Framework_Testcase')) {
    class_alias('PHPUnit\Framework\Testcase', 'PHPUnit_Framework_Testcase');
}
