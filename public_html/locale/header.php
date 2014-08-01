<?php include 'inc/env.php'; ?>
<!DOCTYPE html>

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js eq-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="windows-1251"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="<?php echo $basehref; ?>">
    <title>gettext("SITE_TITLE")</title>
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
                        <a href="index.php" title=gettext("INDEX_TITLE")><h1>gettext("INDEX_TAB_NAME")</h1></a>
                    </div>
                </div>
                <!-- <h1 id="logoBibi"><a href="index.html" title=gettext("INDEX_TITLE")><img src="images/logo_supernova.png" alt="Ателие за уникални танцови изяви" width="350" height="150" /></a></h1> -->
                <div class="navigation-wrapper">
					<nav id="main-navigation">
						<a href="index.php" title=gettext("INDEX_TITLE")>gettext("INDEX_TAB_NAME")</a>
						<a href="dances.php" title=gettext("DANCES_TITLE")>gettext("DANCES_TAB_NAME")</a>
						<a href="faqs.php" title=gettext("QANDA_TITLE")>gettext("QANDA_TAB_NAME")</a>
						<!--a href="gallery.php" title=gettext("GALLERY_TITLE")>gettext("GALLERY_TAB_NAME")</a-->
						<!--a href="gallery-2.php" title=gettext("GALLERY_TITLE")>gettext("GALLERY_TAB_NAME")</a-->
						<a href="contact-page.php" title=gettext("CONTACT_TITLE")>gettext("CONTACT_TAB_NAME")</a>
					</nav>
				</div>
            </div>
        </header>