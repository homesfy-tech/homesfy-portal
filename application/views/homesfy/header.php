<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>

    <meta name="description" content="<?=$description;?>" data-react-helmet="true">
    <meta name="keywords" content="<?=$description;?>" data-react-helmet="true">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  	<link href=<?=$base_url."css/assests/fontawesome-free/css/all.min.css"?> rel="stylesheet" type="text/css">

    <?php
		if (!empty($css)) {

			foreach ($css as $value) {
				echo '<link href="' . $value . '" rel="stylesheet" type="text/css">' . "\n";
			}
		}
	?>
	<?php
		if (!empty($js)) {

			foreach ($js as $value) {
				echo '<script src="' . $value . '"></script>' . "\n";
			}
		}
	?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bgCommon sticky-top p-2 homeBorder">
	<a class="navbar-brand" href="/">
		<img src="https://s3.ap-south-1.amazonaws.com/homesfy.in/common/HomesfyDarkModeLogo.svg">
	</a>
	<?php 
		$link = $_SERVER['REQUEST_URI'];
		if($link != "/homesfy/"){
		echo '<div class="searchCommon">
		        <div class="searchCombo">
		            <div class="d-flex justify-content-center">
		                <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-1" aria-expanded="false" class="react-autosuggest__container">
		                <input type="text" id="name" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-1" class="react-autosuggest__input" placeholder="Search By location, Builder Or Project" value="">
		                    <div id="searchsuggestion" role="listbox" class="react-autosuggest__suggestions-container">
		                    </div>
		                </div>
		                <div class="input-group-append"><button class="input-group search_button btn text-white">Search</button></div>
		            </div>
		        </div>
		    </div>';
		} 
	?>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-white"  href=<?=$base_url?>>Home</a></li>
            <li class="nav-item "><a class="nav-link text-white" href=<?=$base_url."about-us"?>>About Us</a></li>
            <li class="nav-item "><a class="nav-link text-white" href=<?=$base_url."why-homesfy"?>>Why Homesfy</a></li>
            <li class="nav-item "><a class="nav-link text-white" href=<?=$base_url."contact-us"?>>Contact Us</a></li>
        </ul>
    </div>
</nav>

<body>