<?php require_once 'partials/header.html'; ?>
<?php require_once 'partials/navbar.html'; ?>
<?php require_once 'partials/db_con.html'; ?>
<!-- hold the data in our DB -->

<?php
	$sql = "SELECT * FROM member";
	$result = mysqli_query($conn, $sql);
?>

<div class="container">
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
      	<div class="card">
      		<div class="card-header">Edit Users</div>
      		<div class="card-body">
		      	<table class="table table-bordered">
		      		<!--inside bootstrap  -->
		      		<tr>
		      			<th>ID</th>
		      			<!-- table headers in bold format -->
		      			<th>Firstname</th>
		      			<th>Lastname</th>
		      			<th>Email</th>
		      			<th>Password</th>
		      			<!-- <th colspan=2>Actions</th> -->
		      		</tr>
		      			<?php while($row = mysqli_fetch_assoc($result)){ ?>
		      			<tr>
		      				<td><?=$row['id'] ?> </td>
		      				<td><?=$row['firstname'] ?> </td>
		      				<td><?=$row['lastname'] ?> </td>
		      				<td><?=$row['email'] ?> </td>
		      				<td><?=$row['password'] ?> </td>
		      				<td><?=$row['cpass'] ?> </td>

		      					<td> <a href="edit_user.php?id= <?= $row['id']?>
		      					">Edit</a></td>
		      				<!-- <td> <a href="#">Edit</a>  </td> -->
		      				<td>	
		      					<a onclick= "return confirm('Delete?')" href="delete_user.php?id= <?= $row['id']?>
		      					">Delete</a></td>
		      			</tr>


		      			<?php } ?>
		      	</table>
      	
      		</div>
      		</div>
        
      </div>
  </div>
</div>
    

<?php require_once 'partials/footer.php'; ?>
