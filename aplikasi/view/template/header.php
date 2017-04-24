<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />	
		<title>Samyoung Store</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--basic styles-->
                
		<link href="<?php echo URL; ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo URL; ?>assets/font-awesome/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo URL; ?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
                <link href="<?php echo URL; ?>assets/Reyy/css/reyy.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo URL; ?>assets/device-mockups/device-mockups.css">
		<link rel="stylesheet" href="<?php echo URL; ?>assets/prettify/prettify.css">
		<script src="<?php echo URL; ?>assets/prettify/prettify.js"></script>		
		
		<!--halaman tertebtu style plugin-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo URL; ?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--barisan style terkait dengan halaman ini-->
        <script src="<?php echo URL; ?>assets/Reyy/js/jquery.3.js"></script>
        <script src="<?php echo URL; ?>assets/Reyy/js/typed.js"></script>

</head>
	<?php 
		@$page  = $_GET['url'];
	?>
<body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top topnav" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-reyy">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL; ?>">Reyy Commerce</a>
            </div>
            <!--navbar-->
			<div class="collapse navbar-collapse" id="navbar-reyy">
				<div class="container">
                    <ul class="nav navbar-nav navbar-right">
				        <li id="home" <?php if ($page == "") { ?>class="active"<?php } ?>>
					        <a href="<?php echo URL; ?>"> 
							   <b><i class="glyphicon glyphicon-home"></i> Home</b>
							</a>
                        </li>
				
         		        <li id="project" <?php if ($page == "project") { ?>class="active"<?php } ?>>
					        <a href="<?php echo URL; ?>project">
							   <b><i class="glyphicon glyphicon-tasks"></i> Project</b>
							</a>               
				        </li>
				
				        <li id="template"<?php if ($page == "forum") { ?>class="active"<?php } ?>>
					       <a href="<?php echo URL; ?>forum">
						       <b><i class="fa fa-desktop"></i> Template</b>
						   </a>
                        </li>
				
				        <li id="blog" <?php if ($page == "blog") { ?>class="active"<?php } ?>>
					        <a href="<?php echo URL; ?>blog">
							    <b><i class="glyphicon glyphicon-globe"></i> Blog</b>
							</a>
                        </li>
				         <li>
                            <a data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">
							<b><i class="glyphicon glyphicon-search"></i> Cari</b></a>
                         </li>						
						 <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
                            <form class="navbar-form navbar-right" role="search">
                               <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Cari.."/>  
								 <span class="input-group-btn">
                                 <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
								 </span>
                              </div>
			                </form>
                         </div>			
			        </ul>
				
				</div><!--/.container-->
		    </div>
			
	    </nav>	
