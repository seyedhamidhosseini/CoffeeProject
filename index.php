<?php

   include './config/db_connect.php';

   //روش اسد
   //ایجاد کوئری
   $sql = 'SELECT * FROM coffees';
   //ساختن کوئری
   $result = mysqli_query($conn,$sql);
   //دریافت کوئری
   $coffees =mysqli_fetch_all($result,MYSQLI_ASSOC);

   mysqli_free_result($result);
   mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Project</title>
</head>
<body>

</body>
    <?php include './Templates/header.php';?>
    <h4 class="center grey-text">Coffees!</h4>
	<div class="container">
		<div class="row"> <!--برای استفاده از آرایه در Dom -->
			<?php foreach($coffees as $coffee){ ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
                  <img src="./img/coffee.png" class="coffee">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($coffee['title']); ?></h6>
							<ul>
                        <?php foreach(explode(',',$coffee['Ingredients']) as $ing){ ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>
                        <?php } ?>
                     </ul>
						</div>
						<div class="card-action right-align">
						<a class="brown-text" href="details.php?id=<?php echo $coffee['id'] ?>" >more info</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
    <?php include './Templates/footer.php';?>
</html>