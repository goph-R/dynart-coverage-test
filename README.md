# dynart-coverage-test
This projects goal is to test the coverage report with phpunit/xdebug for abstract classes.

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

then (the following command will not cover the abstract classes):
```
php -dauto_prepend_file=xdebug_filter.php vendor\bin\phpunit --coverage-html reports/coverage-html
```

### Warning!

Thanks for [Alex Howansky](https://stackoverflow.com/users/453002/alex-howansky) for the following information:  

The `-dauto_prepend_file=xdebug_filter.php` can screw up the abstract class coverage report, you should avoid it!  

[The stackoverflow topic](https://stackoverflow.com/questions/75981058/phpunit-and-xdebug-coverage-for-abstract-classes-are-always-0?noredirect=1#comment134009776_75981058)

The working report creation:

```
php vendor\bin\phpunit --coverage-html reports/coverage-html
```


All the tests should PASS.

After this you should have a coverage report in the "reports/coverage-html" folder.

