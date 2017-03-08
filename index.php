<?php

require 'includes/db/db_connect.php';
require 'includes/QueryBuilder.php';
require 'includes/functions.php';



/*
*
* @db_connect : created in the db_connect file and required
* Build QueryBuilder object for building select all query and insert
*/

$query = new QueryBuilder($db_connect);
$tasks = $query->selectAll('tasks');

if(isset($_POST['create']))
{
	$title = sanitize($_POST['title']);
	$description = sanitize($_POST['description']);

	$params = array(
		'title' => $title,
		'description' => $description
	);

	$query->insertTask($title, $description);

}





 require 'index.view.php';

