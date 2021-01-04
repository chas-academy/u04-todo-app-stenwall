<?php

namespace App\Domain;

class User
{
	private $id;
	private $name;
	private $email;
	private $pw;
	private $created;
	private $modified;

	public function __construct(
        int $id,
		string $name,
		string $email,
		string $pw,
    ) {
        $this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->pw = $pw;
		$timezone = new \DateTimeZone("Europe/Stockholm");
		$this->created = new \DateTime("now", $timezone);
		$this->modified = new \DateTime("now", $timezone);
    }
}

?>