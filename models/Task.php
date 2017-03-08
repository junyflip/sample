<?php

class Task{

	protected $title;
	protected $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }
}