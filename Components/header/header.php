<html lang="en">
   <head>
      <style>
         div.header-container {
            background-color: white;
            width: 100%;
         }
         a.title {
            vertical-align: middle;
            color: white;
            font-size: 18pt;
         }
         div.header-container a {
            text-decoration: none;
            color: #999999;
            margin: 0 4pt;
         }
         td.links {
            vertical-align: middle;
            width: 150pt;
				font-size: 11pt;
         }
			
			td.actionLinks {
            vertical-align: middle;
            width: 100pt;
         }
         td.title {
            width: 170pt;
				padding-right: 20pt;
				vertical-align: middle;
         }
         table.header {
            table-layout: fixed;
            width: 100%;
         }
			table.header tr td a {
				padding-right: 15pt;
			}
			table.header tr td.actionLinks a {
				padding-right: 0pt;
			}
			a.callToAction {
				background-color: #B23323;
				padding: 4pt !important;
				border-radius: 4pt;
				color: white !important;
			}
			input.dropdown {
				padding: 3pt 8pt;
				cursor: pointer;
			}
			#mini-filler, #dropdown {
				display: none;
			}
			#dropdown {
				display: none;
				width: 30pt;
			}
			#dropdown-menu-container {
				display: none;
				position: fixed;
				right:0;
				top:0;
				width: 200pt;
				height:100%;
			}
			.activeLink {
				color: #B23323 !important;
				font-weight: bold;
			}
      </style>
		<script>
			function isTouchDevice() {
				try {  
					document.createEvent("TouchEvent");  
					return true;  
				} 
				catch (e) {  
					return false;  
				}  
			}

			$.fn.changeHeaderView = function(isTouchDevice) {
				if ($(window).width() <= 640 || isTouchDevice ) {
					$("#header-row").children().not("#title, #mini-filler, #dropdown").each(function() {
						if ($(this).css("display") !== "none") {
							$(this).toggle();
						}
					})
					$('#dropdown').each(function() {
						if ($(this).css("display") == "none") {
							$(this).toggle();
						}
					})
					$('#mini-filler').each(function() {
						if ($(this).css("display") == "none") {
							$(this).toggle();
						}
					})
				} else {
					$("#header-row").children().not("#title, #mini-filler, #dropdown").each(function() {
						if ($(this).css("display") == "none") {
							$(this).toggle();
						}
					})
					$('#dropdown').each(function() {
						if ($(this).css("display") !== "none") {
							$(this).toggle();
						}
					})
					$('#mini-filler').each(function() {
						if ($(this).css("display") !== "none") {
							$(this).toggle();
						}
					})
				}
			}
			
			var isTouchDevice = isTouchDevice();
			
			
			$(document).ready(function() {
				console.log(isTouchDevice);
				if (isTouchDevice) {
					$('#dropdown-menu-container, #dropdown-menu').css("width", "100%");
				}
				$(this).changeHeaderView(isTouchDevice);
				
			});
			$(window).resize(function() {
				$(this).changeHeaderView(isTouchDevice);
			})
		</script>
   </head>
   <body>
      <div class="header-container">
         <div class="max-inline header">
            <table id="header" class="header">
               <tr id="header-row">
                  <td id="title" class="title">
                     <a href="./home.php">
							<img style="width: 165pt" src="/Assets/img/logo.png">
                 
							</a>
						</td>
						<td id="links" class="links">
                     <?php
                        foreach ($pkg["links"] as $url => $link) {
									echo '<a href="./',$url, '"' ;
									if ($url == $pkg["activeLink"]) {
										echo ' class="activeLink" ';
									}
									echo ' >', $link,'</a>';
                        };
                     ?>
                  </td>
                  <td id="filler" class="filler"></td>
                  <td id="actionLinks" class="actionLinks">
                     <?php
                        foreach ($pkg["actionLinks"] as $url => $link) {
									echo '<a href="./',$url, '"' ;
									if ($url == 'signup.php') {
										echo ' class="callToAction" ';
									}
									echo ' >', $link,' </a>';
                        };
                     ?>
                  </td>
						<td id="mini-filler" class="filler"></td>
						<td id="dropdown" class="links"><input type="button" class="dropdown" value="="></td>
               </tr>
            </table>
         </div>
      </div>
		<div id="dropdown-menu-container">
			<?php
				include("./Components/dropdownMenu/dropdownMenu.php");
			?>
		</div>
   </body>
	
	<script>
		$("#dropdown").click(function() {
			$('#dropdown-menu-container').toggle();
		})
	</script>
</html>