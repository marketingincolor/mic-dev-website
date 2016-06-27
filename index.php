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

			//Default to change colors
			$( '.contain-to-grid' ).css( "background-color","#2980b9" );


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
			
			.label.alert { width:120px; text-align:center; }
			.label.success { width:120px; text-align:center; }

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

				/*  Sites array
				*	Should display Name | Path | Start Date | End Date | Status
				* 	To use font awesome icons:
				*  	Checkmark = "completed","done"
				*  	Wrench = "development","testing" */
			
				$websites = array (

					array
					(
						"name" =>"Adams Testing Site", 
						"path" => "adam-testing", 
						"start date" => "start date", 
						"end date" => "end date", 
						"status" => "development"
					),

					array
					(
						"name" =>"BuddyPress Install", 
						"path" => "buddy", 
						"start date" => "start date", 
						"end date" => "end date", 
						"status" => "done"
					),

					array
					(
						"name" =>"My Evergreen Wellness", 
						"path" => "egw", 
						"start date" => "start date", 
						"end date" => "end date", 
						"status" => "development"
					),

					array
					(
						"name" =>"Easy Energy", 
						"path" => "easyenergy", 
						"start date" => "start date", 
						"end date" => "end date", 
						"status" => "done"
					),

					array
					(
						"name" =>"Easy Energy", 
						"path" => "easyenergy", 
						"start date" => "start date", 
						"end date" => "end date", 
						"status" => "done"
					),
			
			  	);

			  	// Obtaining list of names to sort by
				foreach ($websites as $key => $row) {
					$name[$key]  = $row['name'];
				}

				//Sorting by Name
				array_multisort($websites, SORT_ASC, $name);


				//Checking status for Font Awesome, Awesome!
				for ($row = 0; $row < count($websites); $row++) {
			
					for ($col = 0; $col < 5; $col++) {
				
						if ($websites[$row]["status"] === "done" || $websites[$row]["status"] === "completed") {
							$websites[$row]["status"] = "<span class=\"round success label\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Completed</span>";
						}

						else if ($websites[$row]["status"] === "development" || $websites[$row]["status"] === "testing") {
							$websites[$row]["status"] = "<span class=\"round alert label\"><i class=\"fa fa-wrench\" aria-hidden=\"true\"></i> Development</span>";
						}
			
					}
				}

		

				// Set up the table
				echo '
				<table>
					<tbody>
						<th align="left">Name</th>
						<th align="left">Start Date</th>
						<th align="left">End Date</th>
						<th align="left">Status</th>';

				//loop through the websites and display
				//count($websites) loops through all of our websites
		
				for ($row = 0; $row < count($websites); $row++) {
						echo "<tr>";
						echo "<td><a href=\"http://dev.marketingincolor.com" ."/" .$websites[$row]["path"]. "\">" . $websites[$row]["name"] . "</a></td>";
						echo "<td>" . $websites[$row]["start date"]."</td>";
						echo "<td>" . $websites[$row]["end date"]."</td>";
						echo "<td>" . $websites[$row]["status"]."</td>";
						echo "</tr>";

				}

				echo '</tbody></table>';
			?>

		</div>

		<!-- Footer 
		<footer class="footer contain-to-grid">
			<div class="row">
	
				</div>

			</div>
		</footer> -->

		<!-- Foundation -->
		<script src="https://cdn.jsdelivr.net/foundation/6.2.2/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>

	</body>
</html>