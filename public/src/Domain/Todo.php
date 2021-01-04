<?php

namespace App\Domain;

class Todo
{
	private $id;
	private $user_id;
	private $list_id;
	private $task_title;
	private $task_desc;
	private $completed;
	private $created;
	private $modified;

	public function __construct(
        int $id,
		int $userId,
		int $listId,
		string $title,
		string $desc,
		int $completed
    ) {
        $this->id = $id;
		$this->user_id = $userId;
		$this->list_id = $listId;
		$this->task_title = $title;
		$this->task_desc = $desc;
		$this->completed = $completed;
		$timezone = new \DateTimeZone("Europe/Stockholm");
		$this->created = new \DateTime("now", $timezone);
		$this->modified = new \DateTime("now", $timezone);
    }
}

?>