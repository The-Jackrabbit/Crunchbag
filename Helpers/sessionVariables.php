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
if (!is_null($_SESSION['username'])) {
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
				"cart.php" => "Cart",
				"logout.php" => "Logout"
		)
	);
}

?>