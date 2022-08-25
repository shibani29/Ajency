<?php
 include('connect.php');



if ($_POST) {
	
	$category = $_POST['category1'];
	$Language= $_POST['Language1'];

 
 if ($category=='' && $Language=='') {
 		$querymovie = "SELECT * FROM `products` LIMIT 8";
 	}else{

 		
 		if ($category!='') {
 			$categorySearch="`Category` LIKE '$category' ";
 		}else {
 			$categorySearch = "`Category` !='NULL'";
 		}

 		 		if ($Language!='') {
 			$LanguageSearch="`Language` LIKE '$Language' ";
 		}else {
 			$LanguageSearch = "`Language` !='NULL'";
 		}

 		$querymovie = "SELECT * FROM `products` WHERE $categorySearch AND $LanguageSearch LIMIT 8";
 	}

 	if ($result = mysqli_query($myDbConnection, $querymovie)) {
 			while ($movie = mysqli_fetch_array($result)) {$filteredImage = $movie['image'];
 				$filteredHotel = $movie['id'];
 				$filteredName = $movie['title'];
 				$filteredCategory = $movie['category'];
 				$filteredLanguage = $movie['Language'];
 				$filteredService = $movie['likes'];$filteredP = $movie['price'];
                $filteredD = $movie['directors']; $filteredS = $movie['description'];
        $filteredw = $movie['watch'];  $filteredl = $movie['likes'];   ?>
				        <div class="row">
                    <div class="col-md-5">
				          <img class="img-responsive" src="<?php echo $filteredImage; ?>"
				               </div></div>
                    <div class="col-md-7">
							<h3 class="m-t-0"><?php echo $filteredName ?><small><em> By <?php echo $filteredD ?></em></small></h3>
				              	  <hr class="m-t-0 m-b-5"><div class="row">
                           <div class="col-xs-8">
                                <p><?php echo $filteredS; ?></p>
								   <h6 class="m-t-0 m-b-0"><small><?php echo $filteredP?>Min / USA</small></h6>
								 <h6 class="m-t-0 m-b-0"><small><?php echo $filteredCategory; ?></small></h6>
<h6 class="m-t-0 m-b-0"><small>Dir: <?php echo $filteredD?></small></h6></div>
                        <div class="col-xs-4 text-right">
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>   <div class="small m-t-20"><?php echo $filteredw ?> <i class="fa fa-eye"></i></div>
                                <div class="small"><?php echo $filteredl ?> <i class="fa fa-thumbs-up"></i></div>
                                <div class="small">Watchlist <i class="fa fa-binoculars"></i> </div></div>
						</div></div> </div></div></div>

             <?php
 			}
 		}	
}
?>