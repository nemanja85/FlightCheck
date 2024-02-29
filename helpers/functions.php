<?php

    const OK = 0;
    const ERROR = 1;

    const SUCCESS = "\033[32m";
    const FAIL = "\033[31m";

    function displayMessage(string $message, int $code): never
    {
        echo $message . PHP_EOL;
        exit($code);
    }

    function info(string $message): never
    {
        displayMessage(SUCCESS . $message, OK);
    }

    function error(string $message): never
    {
        displayMessage(FAIL . $message, ERROR);
    }

    function dd(mixed...$var): never
    {
        dump($var);
        exit();
    }

    function dump(mixed...$var): void
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }