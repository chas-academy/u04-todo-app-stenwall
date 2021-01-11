<?php

namespace App\Domain;

class TodoList
{
	private $id;
	private $userId;
	private $title;
	private $created;
	private $modified;

	public function __construct(
		string $title	
    ) {
        $this->id = $id;
        $this->user_id = $userId;
        $this->title = $title;
		$timezone = new \DateTimeZone("Europe/Stockholm");
		$this->created = new \DateTime("now", $timezone);
		$this->modified = new \DateTime("now", $timezone);
	}
	
	public function getTitle(): string
    {
        return $this->title;
    }
}

?>