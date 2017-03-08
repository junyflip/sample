<!DOCTYPE html>
<html>
<head>
<title>TASK LISTER - ERRORS ARE MERELY FOR ENTERTAINMENT</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/card.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body> 
	<!-- Task Input Form-->
	<div class="form">
		<h1>TASK LISTER</h1><br><br>
		<form method="post" action="index.php">
		    <label>Name</label>
		    <input name="title" placeholder="Title Here" required>
		            
		    <label>Description</label>
		    <textarea name="description" placeholder="Description Here" required></textarea>
		    <button class="add-to-cart" name="create" type="submit">ADD Task</button>
		</form>
	</div>
	<!--End Task Form -->
	<!--Task Cards -->
	<div class="wrapper">
		<div class="tasks">
			<?php foreach ($tasks as $task) : ?>
	    		<div class="task">
	    			<h2><?= $task->title; ?></h2>
	        <?php if ($task->completed) : ?>
	            <strike><?= $task->description; ?></strike>
	        <?php else : ?>
	            <?= $task->description; ?>
	        <?php endif; ?>
	        	<!--  Didn't complete the code to delte and complete a task--> 
	            <!--<button class="complete" name ="complete" type="button">Complete Task</button>-->
	         
    			</div>
    		<?php endforeach; ?>
		</div>
	</div>
	<!-- End Task Cards -->
</body>
</html>
