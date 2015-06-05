<?php

require_once 'api/TaskList.php';
require_once 'api/Task.php';

$taskList = new TaskList();
echo 'You are getting a total of <b>'.count(json_decode($taskList->getAll())).'</b> lists from your Wunderlist';
echo '<br />';
echo '<pre>'.json_encode(json_decode($taskList->getAll()), JSON_PRETTY_PRINT).'</pre>';

$task = new Task();

// passing a list ID to get tasks from
$tasks = $task->getTasks(158437050);

echo 'You are getting a total of <b>'.count(json_decode($tasks)).'</b> tasks from your Wunderlist';
echo '<br />';
echo '<pre>'.json_encode(json_decode($tasks), JSON_PRETTY_PRINT).'</pre>';
