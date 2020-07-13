<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$title;?></title>

    <meta name="description" content="<?=$description;?>" data-react-helmet="true">
    <meta name="keywords" content="<?=$description;?>" data-react-helmet="true">
    <?php
if (!empty($css)) {

	foreach ($css as $value) {
		echo '<link href="' . $value . '" rel="stylesheet" type="text/css">' . "\n";
	}
}
?>
</head>

<body>