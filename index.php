<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="cookbook, coderduckies">
		<meta name="description" content="Try out some of my fav meals!">
		<meta name="author" content="Ruth Sanchez">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Coder Duckies Cookbook - Home</title>
		<link rel="stylesheet" href="stylesheet.css" type="text/css" />
	</head>
	<body>
		
		<?php include('header.html'); ?>
		<?php include('form.html'); 
		
			//declaring variables:
			$recipeName = $_POST['recipe_name'];     //string
			$ingredientsRaw = $_POST['ingredients']; //string
			$stepsRaw = $_POST['steps'];             //string
			
			//how to you create the container and nest 
			//the content into it?
			
			
			//Name->heading
			
			//indredients->2 column table
			
			//steps->Ordered List
			
		?>
		<?php include('footer.html'); ?>
	</body>
</html>