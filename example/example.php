<?php

	include 'instagram-details.php';

	$instagram = new Instagram();

	$instagram->initializeUser('INSTAGRAM_USERNAME');

	echo '<pre>';

	echo $instagram->getAccountId();echo "<br>";
	echo $instagram->getFullName();echo "<br>";
	echo $instagram->getUsername();echo "<br>";
	echo $instagram->getBiography();echo "<br>";
	echo $instagram->getProfilePic();echo "<br>";
	echo $instagram->getProfilePicHd();echo "<br>";
	echo $instagram->is_private();echo "<br>";
	echo $instagram->getFollowsCount();echo "<br>";
	echo $instagram->getFollowersCount();echo "<br>";
	echo $instagram->getCsrfToken();echo "<br>";
	
	echo '</pre>';
?>