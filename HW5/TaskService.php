<?php

class TaskService
{
    public static function addComment(User $user, Task $task, string $text): Comment
    {
        return new Comment($user, $task, $text);
    }
}
