<?php

require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User("Sereban", "sereban@mail.ru");
$task = new Task($user);

$task->setDescription("Очень важная задача");
$task->markAsDone();
$task->addComment("Новый комментарий");
