<?php
// includes/lang_loader.php

function __($key) {
    static $lang = null;
    if ($lang === null) {
        $l = $_SESSION['lang'] ?? 'en';
        $path = __DIR__ . "/../lang/{$l}.php";
        if(file_exists($path)) {
            $lang = require $path;
        } else {
            $lang = require __DIR__ . "/../lang/en.php";
        }
    }
    return $lang[$key] ?? $key;
}
