	<?php
	// Automatic Country Language Forward Lite
	// https://github.com/tayfuntoprakcioglu/Automatic-Country-Language-Forward-Lite

	$country = array(
    "country-code" => "/url-address/",
	);
	$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if (!in_array($language, array_keys($country))){
    $language = 'us';
	}
	header('Location: ' . $country[$language]);
	?>