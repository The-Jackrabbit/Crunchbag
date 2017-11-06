<?php 
$header_pkg = Array(
	"title" => "CrunchBag",
	"title_url" => "home.php",
	"links" => Array(
		"about.php" => "About",
		"faq.php" => "FAQ",
		"purchase.php" => "Purchase"
	),
	"activeLink" => "",
	"actionLinks" => Array(
			"login.php" => "Login",
			"signup.php" => "Signup"
	)
);
if (isset($_SESSION['username'])) {
	$header_pkg = Array(
		"title" => "CrunchBag",
		"title_url" => "dashboard.php",
		"links" => Array(
			"dashboard.php" => "Dash",
			"purchase.php" => "Purchase"
			
		),
		"activeLink" => "",
		"actionLinks" => Array(
			"purchaseConfirmation.php" => "Cart",
			"settings.php" => "Settings",
			"logout.php" => "Logout"
		)
	);
}

?>
