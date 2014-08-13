<?php session_start();
$l = 'bg';
if ( !empty($_GET['l']) ) {
    $l = $_GET['l'] === 'en' ? 'en' : 'bg';
} 
if ( $l == "en") {
   require('text/en.php');
} else {
   require('text/bg.php');
} 
?>
<?php include 'inc/env.php'; ?>
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
    <div class="main-wrapper" role="main">
        <header class="main-header">
            <div class="wrapper centering clearfix">
                <div class="upper-header">
                    <div class="main-logo">
                        <a href="index.php?l=<?php echo $l ?>" title="<?php echo $INDEX_TITLE; ?>"><h1><?php echo $SITE_TITLE; ?></h1></a>
                    </div>
                </div>
                <div class="navigation-wrapper">
					<nav id="main-navigation">
						<a href="index.php?l=<?php echo $l ?>"title="<?php echo $INDEX_TAB_NAME; ?>"><?php echo $INDEX_TAB_NAME; ?></a>
						<a href="dances.php?l=<?php echo $l ?>"title="<?php echo $DANCES_TAB_NAME; ?>"><?php echo $DANCES_TAB_NAME; ?></a>
						<a href="faqs.php?l=<?php echo $l ?>"title="<?php echo $QANDA_TAB_NAME; ?>"><?php echo $QANDA_TAB_NAME; ?></a>
						<a href="gallery.php?l=<?php echo $l ?>"title="<?php echo $GALLERY_TAB_NAME; ?>"><?php echo $GALLERY_TAB_NAME; ?></a>
						<a href="contact-page.php?l=<?php echo $l ?>"title="<?php echo $CONTACT_TAB_NAME; ?>"><?php echo $CONTACT_TAB_NAME; ?></a>
					</nav>
				</div>
				<div>
					<a href="index.php?l=bg">BG</a>|
					<a href="index.php?l=en">EN</a>
				</div>
            </div>
        </header>