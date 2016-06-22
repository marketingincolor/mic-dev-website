<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Foundation -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.css" />

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script>
		$( document ).ready(function() {

			//Default to show only development tables
			$( '.development').show(); 
			$( '.archive' ).hide();

			//Default to change colors
			$( '.contain-to-grid' ).css( "background-color","#2980b9" );

			//Show Hide on Button Clicks
			$( "#archive" ).click(function(){
				$( ".archive" ).show();
				$( ".archive a" ).css( "color", "#27ae60" );
				$( ".development" ).hide();
				$( ".contain-to-grid" ).css( "background-color", "#27ae60" );
				$( "#development" ).fadeTo( "slow", 0.5, function() {
					//Animation Complete.
				});
				$( "#archive" ).fadeTo("slow", 1, function() {
					//Animation Complete
				});
			});

			$( "#development" ).click(function(){
				$( ".contain-to-grid" ).css("background-color", "#2980b9" );
				$( ".development" ).show();
				$( ".archive" ).hide();
				$( "#archive" ).fadeTo( "slow", 0.5, function() {
					//Animation Complete
				});

				$( "#development" ).fadeTo("slow", 1, function() {
					//Animation Complete
				});

			});
		});
		</script>

		<!-- CSS -->
		<style>

			* { margin: 0; }
			html, body { height: 100%; }

			.center { margin: auto; width: 50%; padding: 10px; position: relative; }
			.container { padding-top:2%; }
			header { background-color: #7f8c8d; height:100px;}
			header h1 { color:white; padding-top:1%;}


			.page-wrap {
			  min-height: 100%;
			  /* equal to footer height */
			  margin-bottom: -142px; 
			}
			.page-wrap:after {
			  content: "";
			  display: block;
			}
			.site-footer, .page-wrap:after {
			  height: 142px; 
			}
			.site-footer {
			  background: orange;
			}

			/*footer*/

			.full-width { max-width: 1400px; }

			.footer {
			  background:#7f8c8d;
			  width:100%;
			  height:100px;
			  position:absolute;
			  bottom:0;
			  left:0;
			}

			.footer i { font-size: 100px; }

			.footer h4 {
			  color: #fff;
			  font-size: 1em;
			  font-weight: 400;
			  text-transform: uppercase;
			  margin-top: 2.5rem;
			  margin-bottom: 10px;
			}

			.footer p, .footer a {
			  font-weight: 300;
			  font-size: .8em;
			  color: #fff;
			}

			@media only screen and (min-width: 40.063em) {
			  .footer .columns:nth-child(n+2) {
			    min-height: 280px;
			  }
			}
			.footer-links {
			  list-style-type: none;
			}
			.footer-links li {
			  margin-top: .5em;
			}
		</style>


		<!-- The Usual -->
		<meta charset="UTF-8">
		<title>MIC | Development</title>
	</head>

	<body>

		<!-- Header -->
		<header class="contain-to-grid">
			<div class="row">
				<h1 class="text-center">MIC Development</h1>
			</div>

		</header>

		<div class="container center">
			<?php

	//Finished Sites
	$finished = array (
		"Marketing In Color" => "http://www.marketingincolor.com",
		"Madico" => "http://www.madico.com",
		"Evergreen Wellness" => "http://www.myevergreenwellness.com",
		"StormGuard" => "http://www.stormguardrestoration.com",
		"Redbeard Crafts" => "http://www.redbeardcrafts.com",
		"Easy Energy" => "http://easyenergysavingtips.com"
	);

	//Sort $finished sites
	asort($finished);

	//Development Sites
	$development = array (

		"EGW Help Subdomain" => "helpegw",
		"EGW Team Subdomain" => "teamegw",
		"BuddyPress Base Install" => "buddy",
		"Easy Energy" => "easyenergy",
		"Evergreen Wellness" => "egw",
		"HD Law Partners" => "hdlaw",
		"Magento Base Install" => "magento",
		"Marketing In Color" => "mic2015",
		"MIC MA Tool" => "micmatool",
		"Portico" => "portico",
		"Redbeard Crafts" => "redbeard",
		"Sunscape Films" => "sunscape",
		"WordPress Test" => "wptest"
	);

	//Sort $development sites
	asort($development);

	echo '
	<table>
		<tbody>
				<tr>
				<a href="#" id="development" class="button radius" style="width:12em;">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				Development</a>
				&nbsp; &nbsp;
				<a href="#" id="archive" style="width: 12em; background-color: #27ae60;" class="button radius" style="width:12em;">
				<i class="fa fa-archive" aria-hidden="true"></i>
				Completed</a>
				&nbsp; &nbsp;

			</tr>
	';



	foreach($development as $name => $link) {
		echo ("<tr><td class=\"development\"><a href=\"" . "http://dev.marketingincolor.com/" . $link . "\">" . $name . "</a></td></tr>");
		}

	foreach($finished as $name => $link) {
		echo ("<tr><td class=\"archive\"><a href=\"" . $link . "\">" . $name . "</a></td></tr>");
		}

		echo '</tbody></table>';
?>


		
		</div>

		<!-- Footer -->
		<footer class="footer contain-to-grid">
			<div class="row">
	
				</div>

			</div>
		</footer>

		<!-- Foundation -->
		<script src="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>

</body>
</html>