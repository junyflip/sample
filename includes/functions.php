<?php

/*
* Remove whitespace, php and html tages from the inputs
*/
function sanitize($text)
{
	$clean_text = trim($text);
	$clean_text = strip_tags($clean_text);

	return $clean_text;

}