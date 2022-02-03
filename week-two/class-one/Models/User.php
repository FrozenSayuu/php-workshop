<?php

class User {
    protected int $id;
	protected string $firstname;
	protected string $lastname;
	protected string $email;

	public function getId(): int {
		return $this->id;
	}

	public function getFirstName(): string {
		return $this->firstname;
	}

	public function getLastName(): string {
		return $this->lastname;
	}

	public function getFullName(): string {
		return "{$this->getFirstName()} {$this->getLastName()}";
	}

	public function getEmail(): string {
		return $this->email;
	}
 
}