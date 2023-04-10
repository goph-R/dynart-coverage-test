# dynart-coverage-test
This projects goal is to test the coverage report with phpunit/xdebug for abstract classes.
Currently TheAbstractClass coverage is 0% :(

### How to create the reports:

Enable XDebug in your php.ini (this is just an example):
```ini
[XDebug]
zend_extension = "c:\xampp\php\ext\php_xdebug.dll"
xdebug.remote_autostart = 1
xdebug.profiler_append = 0
xdebug.profiler_enable = 0
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "c:\xampp\tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"
xdebug.remote_enable = 1
xdebug.remote_handler = "dbgp"
xdebug.remote_host = "127.0.0.1"
xdebug.remote_log = "c:\xampp\tmp\xdebug.txt"
xdebug.remote_port = 9000
xdebug.trace_output_dir = "c:\xampp\tmp"
36000 = 10h
xdebug.remote_cookie_expire_time = 36000
xdebug.mode = coverage ; for PHP8
```

Run the following in the command line in the root of this project:
```
composer update
```

then
```
php -dauto_prepend_file=xdebug_filter.php vendor\bin\phpunit --coverage-html reports/coverage-html
```
All the tests should PASS.

After this you should have a coverage report in the "reports/coverage-html" folder, 
the "TheAbstractClass" coverage should be 100% because of the "TheAbstractClassTest",
but unfortunately it is 0%.

The "TheConcreteClass" coverage is 100%.

### My configuration
* PHP 7.4.3
* XDebug 2.8.1
* PHPUnit 9.6.6
