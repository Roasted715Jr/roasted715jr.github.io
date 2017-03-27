﻿<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gene Technology Research Project - Home</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

		<?php
			include "PHPFile.php";
		?>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="brand">Cloning</div>
        <div class="address-bar">Matthew Duphily | 3-10-17 | Period 5-6 Gold</div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Cloning</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html"><?php echo $tab1; ?></a>
                        </li>
                        <li>
                            <a href="HowItsUsed.html">How its Used</a>
                        </li>
                        <li>
                            <a href="ProsCons.html">Pros/Cons</a>
                        </li>
                        <li>
                            <a href="Question.html">My Question</a>
                        </li>
						<li>
							<a href="References.html">References</a>
						</li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">
			<div class="row">
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <div id="carousel-example-generic" class="carousel slide">
                        <img src="img\NeedleAndCell.jpg" alt="A needle pointing towards a cell" width="625" height="350"/>

                        <h2 class="brand-before">
                            <small>Welcome to my</small>
                        </h2>
                        <h1 class="brand-name">Gene Technology Research Project</h1>
                        <hr class="tagline-divider">
                        <h2>
                            <small>By
                                <strong>Matthew Duphily</strong>
                            </small>
                        </h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="box">
						<div class="col-lg-12">
							<hr>
							<h2 class="intro-text text-center">An overview of cloning</h2>
							<hr>
							<img class="img-responsive img-border img-left" src="img\Dolly.jpg" alt="Dolly the sheep" width="250" height="150">
							<hr class="visible-xs">
							<p>A clone is an organism or piece of genetic material that is genetically identical to one that was preexisting. This naturally happens during asexual reproduction, but scientists have made developments to make it possible to perform reproductive cloning an organism using a process known as somatic cell nuclear transfer (all will be explained in the "How Its Used" tab).</p>
							<p>The first successful attempt of scnt on a mammal was on Dolly the sheep in 1997. Even considering this was performed 20 years ago from when this site was made, there are still some issues present with this type of cloning.</p>
							<p>Some issues include the fact that the DNA is already aged since it came from another organism, therefore shortening the clone's lifespan. Along with this, clones typically are taller and wider than the organism they were cloned from.</p>
							<!-- http://go.galegroup.com/ps/retrieve.do?tabID=T003&resultListType=RESULT_LIST&searchResultsType=SingleTab&searchType=AdvancedSearchForm&currentPosition=1&docId=GALE%7CCX2830101022&docType=Topic+overview&sort=RELEVANCE&contentSegment=&prodId=GVRL&contentSet=GALE%7CCX2830101022&searchId=R1&userGroupName=dove10524&inPS=true -->
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /.container -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Matthew Duphily 2017</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
        </script>

    </body>
</html>
