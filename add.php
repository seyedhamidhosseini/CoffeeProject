<?php 
	include './config/db_connect.php';

	$email = $title = $ingredients = '';
	$error = array('email'=>'','title'=>'','ingredients'=>'');
	if(isset($_POST['submit'])){
		if(empty($_POST['email'])){
			$error['email'] = 'Email Required <br>';
		}
		else{
			$email = $_POST['email'];
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$error['email'] = 'Email is not valid  <br>'; 
			}
		}

		if(empty($_POST['title'])){
			$error['title'] = 'Title Required <br>';
		}
		else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
				$error['title'] = 'title must be letters and spaces only <br>';
			}
		}

		if(empty($_POST['ingredients'])){
			$error['ingredients'] = 'Ingredients Required <br>';
		}
		else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^[a-zA-Z\s]+(,\s?[a-zA-Z\s]*)*$/',$ingredients)){
				$error['ingredients'] = 'Ingredients shoud Separated by Comma <br>';
			}
		}
		if (!array_filter($error)) {
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$title = mysqli_real_escape_string($conn,$_POST['title']); 
			$ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);

			$sql= "INSERT INTO coffees(title ,email ,ingredients) VALUE ('$title','$email','$ingredients')";
			if (mysqli_query($conn,$sql)) {
				header('Location: index.php');
			}
			else {
				echo 'Query Error' . mysqli_error($conn);
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	
	<?php include('./Templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Coffee</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
			<div class="red-text"><?php echo $error['email'] ?></div>
			<label>Coffee Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
			<div class="red-text"><?php echo $error['title'] ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
			<div class="red-text"><?php echo $error['ingredients'] ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brown z-depth-0">
			</div>
		</form>
	</section>

	<?php include('./Templates/footer.php'); ?>

</html>