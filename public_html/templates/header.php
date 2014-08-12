<?php include 'inc/env.php'; 
?>
<!DOCTYPE html>

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js eq-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="<?php echo $basehref; ?>">
    <title>ApplauS Dance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/about-page.css">
    <link rel="stylesheet" href="styles/contact-page.css">
    <link rel="stylesheet" href="styles/blog-item-page.css">
    <link rel="stylesheet" type="text/css" href="styles/blog-page.css">
	<link rel="icon" href="logo_supernova-2.ico" type="image/x-icon">
	<link rel="shortcut icon" href="logo_supernova-2.ico" type="image/x-icon">

</head>

<body>
<?php 
if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'bg';
} else {
    $_COOKIE['language'] = 'bg';
}
setcookie('language', $_COOKIE['language']);
if ( $_COOKIE['language'] == "en") {
   require('text/en.php');
   $language = 'en';
} else {
   require('text/bg.php');
   $language = 'bg';
} 

?>
    <div class="main-wrapper" role="main">
        <header class="main-header">
            <div class="wrapper centering clearfix">
                <div class="upper-header">
                    <div class="main-logo">
                        <a href="index.php?language=<?php echo $language ?>" title="������ �� �������� ������� �����"><h1>ApplauS Dance</h1></a>
                    </div>
                </div>
                <!-- <h1 id="logoBibi"><a href="index.html" title="������ �� �������� ������� �����"><img src="images/logo_supernova.png" alt="������ �� �������� ������� �����" width="350" height="150" /></a></h1> -->
                <div class="navigation-wrapper">
					<nav id="main-navigation">
						<a href="index.php?language=<?php echo $language ?>"title="ApplauS Dance">ApplauS Dance</a>
						<a href="dances.php?language=<?php echo $language ?>"title="<?php echo $title_dances; ?>"><?php echo $title_dances; ?></a>
						<a href="faqs.php?language=<?php echo $language ?>"title="<?php echo $title_faqs; ?>"><?php echo $title_faqs; ?></a>
						<a href="gallery.php?language=<?php echo $language ?>"title="<?php echo $title_gallery; ?>"><?php echo $title_gallery; ?></a>
						<a href="contact-page.php?language=<?php echo $language ?>"title="<?php echo $title_contact; ?>"><?php echo $title_contact; ?></a>
					</nav>
				</div>
				<div>
					<a href="index.php?language=bg">BG</a>|
					<a href="index.php?language=en">EN</a>
				</div>
            </div>
        </header>