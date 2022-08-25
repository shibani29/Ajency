<?php
include('config/connect.php');
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Explore List</title>

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
                   <a href="#">LOGIN</a>
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
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h5>FILTER BY</h5>
                        <div class="row">
                           <div class="col-md-6">
                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="" class="col-md-3 control-label"><em>Genre:</em> </label>
                                        <div class="col-md-9"><select class="browser-default" id="category" onchange="filtermovies()">
                                              <option value="" >All</option>
              <option value="Horror">Horror</option>
              <option value="Drama">Drama</option>
              <option value="Award Winning">Award Winning</option>
                                            </select></div>
                                    </div>
                                </form>
            <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="" class="col-md-3 control-label"><em>Language: </em></label>
                                        <div class="col-md-9">
            <select class="browser-default" id="Language" onchange="filtermovies()">
              <option value="" >All</option>
              <option value="English">English</option>
              <option value="Hindi">Hindi</option>
            </select>          
        </div>
   </div>
                                </form>
                            </div>
                            <div class="col-md-6 text-right">
                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="" class="col-md-3 control-label"><em>SORT BY:</em> </label>
                                        <div class="col-md-9"><select name="" id="">
                                                <option value="">all</option>
                                            </select></div>
                                    </div>
                                </form>
                                <a href="#"><i class="fa fa-th-large fa-2x"></i></a>
                                <a href="#"><i class="fa fa-th-list fa-2x"></i></a>
                                <a href="#"><i class="fa fa-list-alt fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="spacer-40"></div>
    <div class="row">
      <div id="displayHere">
  <?php
      $queryMovies = "SELECT * FROM `products` LIMIT 8";
  if ($Moviesresult = mysqli_query($myDbConnection, $queryMovies)) {
      while ($Movies = mysqli_fetch_array($Moviesresult)) {$UnfilteredImage = $Movies['image'];
       $UnfilteredHotel = $Movies['id'];
 		$Unfilteredw = $Movies['watch'];	$Unfilteredl = $Movies['likes'];
        $UnfilteredName = $Movies['title'];
        $UnfilteredCategory = $Movies['category'];
        $UnfilteredP = $Movies['price'];
        $UnfilteredService = $Movies['likes']; $UnfilteredLanguage = $Movies['Language'];
                $UnfilteredD = $Movies['directors'];$UnfilteredS = $Movies['description'];
             ?>
              <div class="row">
                    <div class="col-md-5">
				          <img class="img-responsive" src="<?php echo $UnfilteredImage; ?>"
				               </div></div>
                    <div class="col-md-7">
							<h3 class="m-t-0"><?php echo $UnfilteredName ?><small><em> By <?php echo $UnfilteredD ?></em></small></h3>
				              	  <hr class="m-t-0 m-b-5"><div class="row">
                           <div class="col-xs-8">
                                <p><?php echo $UnfilteredS; ?></p>
								   <h6 class="m-t-0 m-b-0"><small><?php echo $UnfilteredP?>Min / USA</small></h6>
								 <h6 class="m-t-0 m-b-0"><small><?php echo $UnfilteredCategory; ?></small></h6>
<h6 class="m-t-0 m-b-0"><small>Dir: <?php echo $UnfilteredD?></small></h6></div>
                        <div class="col-xs-4 text-right">
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-youtube-square fa-2x"></i></a>  

 <div class="small m-t-20"><?php echo $Unfilteredw ?> <i class="fa fa-eye"></i></div>
                                <div class="small"><?php echo $Unfilteredl ?> <i class="fa fa-thumbs-up"></i></div>
                                <div class="small">Watchlist <i class="fa fa-binoculars"></i> </div>
						</div>
</div> </div></div>
</br>
             <?php
      }
    }  ?>      
      </div>
    </div>  
     </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">
  function filtermovies(){
        var category = document.getElementById('category').value;
        var Language = document.getElementById('Language').value;

       $.post('config/filtermovies.php', {category1:category,Language1:Language}, function(data){
           $('#displayHere').html(data);
        });      
  }


</script>
   <div class="spacer-40"></div>

                <div class="text-center">
                    <a href="#" class="btn btn-primary ">Load More...</a>
                </div>
                <div class="spacer-40"></div>
				
                <h3>TRENDING</h3>
                <hr class="m-t-0"> 
                <div class="slider1 regular-slider">
                    <div>
                        <div class="focus-img">
                             <img src=https://i.imgur.com/Fo68dJD.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://cdn.mos.cms.futurecdn.net/dTis3tCMsBeUSjcgA3NZTa-320-80.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
<img src="https://i.ytimg.com/vi/CHJocqYD41g/maxresdefault.jpg" class="img-responsive">
                          
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
 <img src="https://upload.wikimedia.org/wikipedia/en/e/e2/Darlings_poster.jpg" class="img-responsive">
                            
                        </div>
                    </div>
                </div>                  

                <div class="spacer-50"></div>

                <h3>AWARD WINNING</h3>
                <hr class="m-t-0"> 
                <div class="slider1 regular-slider">
                    <div>
                        <div class="focus-img">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f8b2ef92655071.5e505bf7132ab.png" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://wallpaperaccess.com/full/1508269.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/C9A38B17830BF1BCB4F069F4EF17C7316AAF10861B2EBE906583FE5CEC5960DB/scale?width=1200&aspectRatio=1.78&format=jpeg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://www.socialistalternative.org/wp-content/uploads/2020/02/Parasite.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="spacer-50"></div>

                <h3>INDIAN</h3>
                <hr class="m-t-0"> 
                <div class="slider1 regular-slider">
                    <div>
                        <div class="focus-img">
                            <img src="https://upload.wikimedia.org/wikipedia/en/e/e2/Darlings_poster.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://i.ytimg.com/vi/BwrZfGq1HlQ/maxresdefault.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://images.indianexpress.com/2022/03/salute.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div>
                        <div class="focus-img">
                            <img src="https://i.ytimg.com/vi/CHJocqYD41g/maxresdefault.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="spacer-50"></div>

                <div class="row">
                    <div class="col-md-6">
                        <h3>SOME AWESOME PLAYLIST</h3>
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
                <div class="slider2 regular-slider">
                    <div><img src="https://i.scdn.co/image/ab6775700000ee850965b02d116e5eef6e62cbb1" class="img-responsive"></div>
                    <div><img src="https://i.scdn.co/image/ab67706f00000003de2af6ecddefd9ab98e7aea2" class="img-responsive"></div>
                    <div><img src="https://i.scdn.co/image/ab67706c0000bebb77ef554ce79359be928fae5d" class="img-responsive"></div>
                    <div><img src="https://i.scdn.co/image/ab67706f000000031e337d0e41fc3db3ed7f07a4" class="img-responsive"></div>
                    <div><img src="https://rollingstoneindia.com/wp-content/uploads/2019/02/SPOTIFY-PLAYLIST-SPOTIFY-SOUND-OF-MUMBAI.jpg" class="img-responsive"></div>
                    <div><img src="https://i.scdn.co/image/ab67706f00000003ffe256d1e41c0bb13732e052" class="img-responsive"></div>
                </div>				

            </div>
        </div>
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