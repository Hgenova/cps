<?php
	$id = $_GET['id'];
	echo $id;
?>

<?php require_once '../partials/header.php'; ?>
<?php require_once '../partials/navbar.php'; ?>
<?php require_once 'db_con.php'; ?>

<?php
	$id = $_GET['id'];
	// 1st step to update data, retrieve all data 1st
	$sql = "SELECT * FROM member WHERE id = $id";

	$result = mysqli_query($conn, $sql);

?>

<div class="container">
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
      	<div class="card">
      		<div class="card-header">Edit User</div>
      		<div class="card-body">
		      	<form action="process_update.php" method="POST">
		      		
		      		<?php while($row = mysqli_fetch_assoc($result))   ?>
		      		<input type="hidden" name="id" value="<?=$row['id']?>">
		      		<!-- hidden time input field -->

		      		<div class="form-group">
		      			<label>Firstname</label>
		      			<input type="text" value="<?=$row['firstname']?>" class="form-control" name="firstname">
		      		</div>

		      		<div class="form-group">
		      			<label>Lastname</label>
		      			<input type="text" value="<?=$row['lastname']?>" class="form-control" name="lastname">
		      		</div>

		      		<div class="form-group">
		      			<label>Email</label>
		      			<input type="text" value="<?=$row['email']?>" class="form-control" name="email">
		      		</div>

		      		<div class="form-group">
		      			<label>Password</label>
		      			<input type="password" value="<?=$row['password']?>" class="form-control" name="password">
		      		</div>


		      		<input class="btn btn-success" type="submit" value="SUBMIT">

		      		<input class="btn btn-warning" type="reset"	value="CLEAR">

		      		<?php  ?>
		      	</form>
    				
    				

      		</div>
      		</div>
        
      </div>
  </div>
</div>
    

<?php require_once '../partials/footer.php'; ?>

