
<?php require_once "partials/header.php";?>


<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-3">
			<h1>Categories</h1>
			<div class="list-group">

    
				<?php require_once 'controllers/connect.php';
		      			$sql = "SELECT * FROM seminar";
		      			$result = mysqli_query($conn,$sql);

		      			if(mysqli_num_rows($result) > 0){
		      				while ($row = mysqli_fetch_assoc($result)) {
		      					echo " <a href='#' class='list-group-item' onclick='showCategories($row[productid])'>".$row['title']."</a> ";
		      				}
		      			}

		      	?>
		    </div>  		
		</div>	
	</div>

		<form>
          <select class="target btn btn-secondary btn-block mt-5" id="sort_price">
            <option value="0" selected="selected">Sort by Price</option>
            <option value="1">Lowest First</option>
            <option value="2">Highest First</option>
          </select>
        </form>
      
      </div>
      <div class="col-lg-9">
        <form class="form-inline mx-auto">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input id="search" class="form-control form-control-sm ml-3 w-75 mx-auto" type="text" placeholder="Search" aria-label="Search">
        </form>

		<div class="col-lg-9">
		  	<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>

			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="Images/seminar5.png" alt="First slide">
				</div>
			</div>	

				<div class="carousel-item">
					<img class="d-block img-fluid" src="Images/seminar6.png" alt="Second slide">
				</div>

				<div class="carousel-item">
					<img class="d-block img-fluid" src="Images/seminarA.png" alt="Third slide">
				</div>

			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		<h2 id="category_name2" class="text-center"></h2>
        <div class="row" id="products">
			
			<div class="row">

      		<?php require_once 'controllers/connect.php';
      			$sql = "SELECT * FROM seminar";
      			$result = mysqli_query($conn,$sql);

      			if(mysqli_num_rows($result) > 0){
      				while ($row = mysqli_fetch_assoc($result)) {
      					// $name = $row["name"];
      					// echo $name . "<br>";
      					echo "
      					<div class='col-md-4'>
			              <div class='card h-100'>
			              	<img src='$row[image]'>
			                	<div class='card-body'>
				                  <h4 class='card-title'>$row[title]</h4>
				                  <h5>$row[price]</h5>
				                  <p class='card-text'>
				                    $row[description]
				                  </p>
				                </div>
			               </div>
                     </div>
			                <div class='card-footer'>
				                <input class='form-control mb-3' type='number'>
				                <button class='btn btn-block btn-primary'><i class='fas fa-cart-plus'></i> Add to Cart</button>
				               
			                </div>";

      				}
      			}

      		?>
      		<div class="row" id="products"></div>

			</div>
	<!-- row -->
</div>
	<!-- container -->
<script type="text/javascript">

  let 
  function showCategories(category_id){

     // alert(category_id);
    $.ajax({
      url:"app/controllers/show_items.php",
      method:"POST",
      data:{
      category_id : category_id
      },
      dataType:"text",
      success: function(data){
        $("#products").html(data);
          if(category_id == "1"){
          $("#category_name2").html("Collection 1");
          }
          if(category_id == "2"){
          $("#category_name2").html("Collection 2");
          }
          if(category_id == "3"){
          $("#category_name2").html("Collection 3");
          }
      }
    });
  }

</script>

<script type="text/javascript">
  $("#search").keyup(function(){
    let word = $(this).val();
    $.post("app/controllers/product_search.php", {word:word}, function(data){
      $("#products").html(data);
    })
  });
</script>

<script type="text/javascript">
  $("#sort_price").click(function(){
    let price = $(this).val();
    $.post("app/controllers/catalog_sort_price.php", {price:price}, function(data){
      $("#products").html(data);
    })
  });

// let addToCart = $("#addToCart$row[id]").val();
  
$("button#addToCart").on("click", function(){
  // get the product id
  let productId = $(this).attr("data-id");
  let productQuantity = $("#quantity" + productId).val();
  // let productQuantity1 = productId + quantity;
  console.log("Product Id :" + productId);
  console.log("Product quantity :" + quantity);

})

</script>
<?php require_once "partials/footer.html";?>



