<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-10-19 08:48:07 --> pg_query(): Query failed: ERROR:  column &quot;date_time_finished&quot; of relation &quot;jobs&quot; does not exist
LINE 3:    SET date_time_finished = NOW(),
               ^
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler()
#1 /var/www/html/todolist/system/Database/Postgre/Connection.php(194): pg_query()
#2 /var/www/html/todolist/system/Database/BaseConnection.php(738): CodeIgniter\Database\Postgre\Connection->execute()
#3 /var/www/html/todolist/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery()
#4 /var/www/html/todolist/app/Controllers/Main.php(44): CodeIgniter\Database\BaseConnection->query()
#5 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->jobDone()
#6 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#7 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#8 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2022-10-19 09:22:00 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:25:08 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:27:49 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:28:31 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:30:32 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:31:33 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:32:51 --> Cannot use object of type CodeIgniter\Database\Postgre\Result as array
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 09:34:57 --> Invalid file: index.php/main/edit_job.php
#0 /var/www/html/todolist/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile()
#1 /var/www/html/todolist/system/Common.php(176): CodeIgniter\View\View->render()
#2 /var/www/html/todolist/app/Controllers/Main.php(72): view()
#3 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#4 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#5 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#6 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2022-10-19 09:37:14 --> Invalid file: index.php/main/edit_job.php
#0 /var/www/html/todolist/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile()
#1 /var/www/html/todolist/system/Common.php(176): CodeIgniter\View\View->render()
#2 /var/www/html/todolist/app/Controllers/Main.php(70): view()
#3 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#4 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#5 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#6 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2022-10-19 09:38:40 --> Invalid file: index.php/main/edit_job.php
#0 /var/www/html/todolist/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile()
#1 /var/www/html/todolist/system/Common.php(176): CodeIgniter\View\View->render()
#2 /var/www/html/todolist/app/Controllers/Main.php(70): view()
#3 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#4 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#5 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#6 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2022-10-19 09:39:43 --> Invalid file: index.php/main/edit_job.php
#0 /var/www/html/todolist/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile()
#1 /var/www/html/todolist/system/Common.php(176): CodeIgniter\View\View->render()
#2 /var/www/html/todolist/app/Controllers/Main.php(72): view()
#3 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJob()
#4 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#5 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#6 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2022-10-19 09:51:09 --> Too few arguments to function App\Controllers\Main::editJobsubmition(), 0 passed in /var/www/html/todolist/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJobsubmition()
#1 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2022-10-19 10:05:43 --> pg_query(): Query failed: ERROR:  invalid input syntax for type integer: &quot;&quot;
LINE 5:    WHERE id_job = ''
                          ^
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler()
#1 /var/www/html/todolist/system/Database/Postgre/Connection.php(194): pg_query()
#2 /var/www/html/todolist/system/Database/BaseConnection.php(738): CodeIgniter\Database\Postgre\Connection->execute()
#3 /var/www/html/todolist/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery()
#4 /var/www/html/todolist/app/Controllers/Main.php(79): CodeIgniter\Database\BaseConnection->query()
#5 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->editJobsubmition()
#6 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#7 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#8 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2022-10-19 10:22:20 --> Argument 2 passed to view() must be of the type array, object given, called in /var/www/html/todolist/app/Controllers/Main.php on line 104
#0 /var/www/html/todolist/app/Controllers/Main.php(104): view()
#1 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->deleteJob()
#2 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#3 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#4 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2022-10-19 10:23:55 --> Argument 2 passed to view() must be of the type array, object given, called in /var/www/html/todolist/app/Controllers/Main.php on line 104
#0 /var/www/html/todolist/app/Controllers/Main.php(104): view()
#1 /var/www/html/todolist/system/CodeIgniter.php(847): App\Controllers\Main->deleteJob()
#2 /var/www/html/todolist/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#3 /var/www/html/todolist/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#4 /var/www/html/todolist/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
