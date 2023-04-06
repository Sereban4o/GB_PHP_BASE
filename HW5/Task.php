<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    public Comment $comment;

    function __construct(User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime();
    }
    function setDescription(string $description)
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }
    function markAsDone()
    {
        $this->dateDone = new DateTime();
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }
    function addComment($comment)
    {
        $this->comment = TaskService::addComment($this->user, $this, $comment);
    }
};
