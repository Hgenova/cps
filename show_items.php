 <?php
	
	//connect to the database
	include 'controllers/connect.php';

	$categoryId = $_POST['id'];

	$sql = "SELECT * FROM Seminar WHERE category_id = '$id'"; 
	$result = mysqli_query($conn, $sql);
	$data = "";
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$data .= "
							    <div class='col-md-4'>
							    	<div class='card h-100'>
							    		<img src='$row[img_path]'>
							    		<div class='card-body'>
							    			<h4 class='card-title'>$row[name]</h4>
							    			<h5>$row[price]</h5>
							    			<p class='card-text'>$row[description]</p>
							    		</div>
							    		<div class='card-footer'>
							    			<input class='form-control' mb-3 type=number>
							    			<button class='btn btn-block btn-primary'>Add to Cart</button>
							    		</div>
							    	</div>
							    </div>
							";
		}
	}
		echo $data;





?>