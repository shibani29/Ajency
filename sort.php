<?php
    // Database connection
    $db = mysqli_connect('localhost', 'root', '', 'tutorials');
    // First request, on load
    $sql = "SELECT *FROM products";
    $exe = $db->query($sql);
?>
<html>
    <head> <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

        <!-- Including jQuery -->
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<link href="assets/css/theme-child.css" rel="stylesheet">

<!-- <link rel="import" href="http://www.polymer-project.org/components/paper-ripple/paper-ripple.html"> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div class="wrapper">
	<div class="header">
		<div class="logo">
			<img src="assets/img/logo.jpg">
		</div>
		<div class="pull-right">
			<div class="links pull-left">
				<a href="C:\xampp\htdocs\N\filter">FILTER</a>
				<span>|</span>
				<a href="#">SEARCH</a>
			</div>
			<div class="social-links pull-left">
				<div class="fb link">
					<div class="icon">
						<i class="fa fa-facebook fa-lg fa-fw"></i>
					</div>
					<div class="action"><a href="#"><small>Like</small></a></div>                        
				</div>
				<div class="clearfix"></div>
				<div class="twitter link">
					<div class="action"><a href="#"><small>Follow</small></a></div>
					<div class="icon">
						<i class="fa fa-twitter fa-lg fa-fw"></i>
					</div>
				</div>
			</div>                
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="sub-header">
		<a href="#">Home</a>
		<span>|</span>
		<a href="#">Movies</a>
		<span>|</span>
		<a href="#">Playlists</a>
		<span>|</span>
		<a href="#">Articles</a>
		<span>|</span>
		<a href="#">Submit Films</a>
	</div>
		
	<!--Navigation-->        
	
	 <!--Content-->
	<div class="container header-space">
		<div class="content-wrapper">

			<div class="row">
				<div class="col-md-6">
					<h2>EXPLORE</h2>
				</div>
				<div class="col-md-6">
					<div class="pull-right m-t-20">
						<form action="" class="form-horizontal">
							<div class="form-group">
								<div class="col-md-12"><input type="text" class="form-control" placeholder="Search"></div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<hr class="m-t-0">
  
        <div>  Sort by :
            <select class="form-control" id="sortby" name="sortby">
                <option value="">all</option>
                <option value="price">Duration</option>
                <option value="likes">Likes</option>
            </select>
            <table border="1">
                <thead>
                    <tr>
                        
                        <th>Title</th>
                        <th>Directors</th><th>Genre</th><th>Language</th><th>Durations</th>
                        <th>Likes</th>
                        <th>Views</th>
                       
                    </tr>
                </thead>
                <tbody id="list">
                    <?php
                        while($row = mysqli_fetch_assoc($exe)) {
                            echo "
                                <tr>
								<td>".$row['title']."</td>
								<td>".$row['directors']."</td>
								<td>".$row['category']."</td><td>".$row['Language']."</td><td>".$row['price']."</td>
								<td>".$row['likes']."</td>
								<td>".$row['watch']."</td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
					</div>
        </div>
        <script>
            $(document).ready(function(){
                // Each time you change your sort list, send AJAX request
                $("#sortby").change(function(){
                    $.ajax({
                        method: "POST",
                        url: "request.php",
                        data: { sortby:$("#sortby").val() }
                    })
                    // Copy the AJAX response in the table
                    .done(function( msg ) {
                        $("#list").html(msg);
                    });
                });
            });
        </script>
   <div class="spacer-40"></div>

<div class="text-center">
	<a href="#" class="btn btn-primary ">Load More...</a>
</div>
<div class="spacer-40"></div>

<!-- /container -->
<div class="footer-push"></div>
</div><!-- /wrapper -->
<footer class="footer m-t-20">
<div class="footer-container">
<div class="row">
<div class="col-md-8">
	<div class="row">
		<div class="col-md-3">
			<p><a href="#">MOVIES</a></p>
			<p><a href="#">SUBMIT FILMS</a></p>
		</div>
		<div class="col-md-3">
			<p><a href="#">ARTICLES</a></p>
			<p><a href="#">ABOUT</a></p>
		</div>
		<div class="col-md-3">
			<p><a href="#">PLAYLIST</a></p>
			<p><a href="#">CONTACT US</a></p>
		</div>
		<div class="col-md-3">
			<p><a href="#">FAQ</a></p>
			<p><a href="#">BE AN AMBASSADOR</a></p>
		</div>
	</div>
</div>
<div class="col-md-4">
	<form action="" class="form-horizontal">
		<div class="form-group">
			<label for="" class="col-md-5 text-right">FOLLOW US</label>
			<div class="col-md-7">
				<div class="social-links">
					<div class="fb link">
						<div class="icon">
							<a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
						</div>
					</div>
					<div class="twitter link">
						<div class="icon">
							<a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
						</div>
					</div>
					<div class="youtube link">
						<div class="icon">
							<a href="#"><i class="fa fa-youtube-play fa-lg fa-fw"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group has-feedback">
			<label for="" class="col-md-5 text-right">SUBSCRIBE</label>
			<div class="col-md-7">
				<input type="email" class="form-control input-sm subscribe" name="subscribe" placeholder="Subscribe to our newsletter to know about latest movies and articles" >
				<span class="fa fa-envelope fa-2x form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
	</form>
</div>
</div>
</div>            
<div class="container-fluid footer-bar">                    
&copy; 2015 ShortFilmWindow | All Rights Reserved.
</div>
</footer>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/flyLabel/flyLabel.min.js"></script>
<script src="assets/js/modernizr/modernizr.js"></script>
<script src="assets/js/slick-slider/slick.min.js"></script>
<script src="assets/js/custom.js"></script>

<script src="b.js"></script>






</body>
</html> 