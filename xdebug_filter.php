<?php

// define('XDEBUG_PATH_INCLUDE', 1); // for PHP 7.4.3

xdebug_set_filter(
    XDEBUG_FILTER_CODE_COVERAGE,
    XDEBUG_PATH_INCLUDE,
    ["./src"]
);
