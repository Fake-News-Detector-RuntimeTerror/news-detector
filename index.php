<html>
<head>
	<title>Fake News Detector</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  	<a class="navbar-brand" href="index.php">The Fake News Detector</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href='index.php'>Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href='login.php'>Admin<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#">How CORONA spreads?</a>
            <a class="dropdown-item" href="#">How it can be prevented?</a>
          <a class="dropdown-item" href="#">Know more about CORONA Virus</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  	</div>
	</nav>
	
	<div class="container">
		<div class="jumbotron p-3 p-md-5 my-3 text-white rounded bg-dark">
	        <div class="col-md-6 px-0">
	          <h1 class="display-4 font-italic">The True News</h1>
	          <p class="lead my-3">Let's leave our hands and win over Novel Corona Virus</p>
	        </div>
      	</div>

		<div class="row mb-2">
	        <div class="col-md-6">
	          <div class="card flex-md-row mb-4 box-shadow h-md-250">
	            <div class="card-body d-flex flex-column align-items-start">
	              <strong class="d-inline-block mb-2 text-primary">Covid-19</strong>
	              <h3 class="mb-0">
	                <a class="text-dark" href="#">Spread</a>
	              </h3>
	              <div class="mb-1 text-muted">April 15</div>
	              <a href="#">Continue reading</a>
	            </div>
	            <img src="social_media_032720.jpg" height="225px" wider="90px" alt="Covid-19 Spread">
	          </div>
	        </div>
	        <div class="col-md-6">
	          <div class="card flex-md-row mb-4 box-shadow h-md-250">
	            <div class="card-body d-flex flex-column align-items-start">
	              <strong class="d-inline-block mb-2 text-success">Covid-19</strong>
	              <h3 class="mb-0">
	                <a class="text-dark" href="#">Precautions</a>
	              </h3>
	              <div class="mb-1 text-muted">April 16</div>
	              <a href="#">Continue reading</a>
	            </div>
	            <img src="COVID-19-handwashing.jpg" height="225px" wider="90px" alt="Covid-19 Precautions">
	          </div>
	        </div>
	      </div>
	    </div>

	<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Fakenewsdetector";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error) {
				die("Connection failed:" . $conn->connect_error);	
			}

			$sql = "SELECT fakenews, realnews FROM FakeNewsDetector";

			$results = $conn->query($sql);
			if($results->num_rows>0) {
				while($row = $results->fetch_assoc() ) {
				echo "	
	            <div class='col-md-4'>
	              <div class='card mb-4 box-shadow h-100'>
	                <img class='card-img-top' src='" . $row['fakenews'] . "' alt='Covid-19' height='225px' wider='100px'>
	                <div class='card-body'>
	                  <p class='card-text'>" . $row['realnews'] . "
	                  <b></p>
	                  <div class='d-flex justify-content-between align-items-center'>
	                    <div class='btn-group'>
	                      <button type='button' class='btn btn-sm btn-outline-secondary' data-toggle='modal' data-target='#exampleModalCenter'>Know More</button>


	                      <!-- Modal -->
							<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
							  <div class='modal-dialog modal-dialog-centered ' role='document'>
							    <div class='modal-content'>
							      <div class='modal-header'>
							        <h5 class='modal-title' id='exampleModalCenterTitle'>Modal title</h5>
							        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
							          <span aria-hidden='true'>&times;</span>
							        </button>
							      </div>
							      <div class='modal-body'>
							        <p class='card-text'>" . $row['fakenews'] . "
					                <b><br>" . $row['realnews'] . "</b>
					                
							      </div>
							      <div class='modal-footer'>
							        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
							    </div>
							  </div>
							</div>
	                    </div>
	                    <small class='text-muted'>9 mins</small>
	                  </div>
	                </div>
	              </div>
	            </div>";
            }
			}
			else{
				echo '<p>No News to Show</p>';
			}
            ?>
        	</div>    
		</div>
	</div>

    <!-- <nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-end">
	    <li class="page-item disabled">
	      <a class="page-link" href="#" tabindex="-1">Previous</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav> -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>