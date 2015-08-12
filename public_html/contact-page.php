<?php 
	$page = 'contact-page';
	define("current_page", "contact-page");
	include('templates/header.php');
?>

<div class="content-wrapper">

    <div class ="text-wrapper">
        <div class="main-content clearfix">
            <h1 class="page-title"><?php echo $CONTACT_TITLE; ?></h1>
            <div id="contact-form">
				<?php include('templates/form/contact-form.php');?>
            </div><!-- end of .contact-form -->
            
            <div id="contact-box">
                <div id="contact-info">
                    <p class="primary"><?php echo $CONTACT_CITY; ?><br />
                        <?php echo $CONTACT_ADDRESS; ?>
                    </p>
                    <p class="secondary"><?php echo $CONTACT_PHONE; ?><br />
                        <?php echo $CONTACT_MAIL; ?>
                    </p>
                </div><!-- end of #contact-info -->
                
                <div id="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11736.956430701533!2d23.361997842575068!3d42.65628817722786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8429fa4b4da9%3A0x2a0ac364cb49e948!2z0JzRg9GB0LDQs9C10L3QuNGG0LA!5e0!3m2!1sen!2sbg!4v1439407591177" width="425" height="350" frameborder="0" style="border:0" allowfullscreen></iframe><br /><small><a href="https://www.google.bg/maps/place/%D0%9C%D1%83%D1%81%D0%B0%D0%B3%D0%B5%D0%BD%D0%B8%D1%86%D0%B0/@42.6562882,23.3619978,15z/data=!4m2!3m1!1s0x40aa8429fa4b4da9:0x2a0ac364cb49e948?hl=en" style="color:#FFF;text-align:left" target="_blank"><?php echo $CONTACT_BIGGER_MAP; ?></a></small>
                </div><!-- end of #google-map -->
            </div><!-- end of #contact-box -->


<div id="contact-box">
                <div id="contact-info">
                    <p class="primary"><?php echo $CONTACT_CITY_1; ?><br />
                        <?php echo $CONTACT_ADDRESS_1; ?>
                    </p>
                    <p class="secondary"><?php echo $CONTACT_PHONE; ?><br />
                        <?php echo $CONTACT_MAIL; ?>
                    </p>
                </div><!-- end of #contact-info -->
                
                <div id="google-map">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2934.139091461985!2d23.2398802!3d42.658407800000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa9b50c5a03093%3A0x79280f4feb3c8c54!2z0LHRg9C70LXQstCw0YDQtCDigJ7QptCw0YAg0JHQvtGA0LjRgSBJSUnigJwgMzc1LCAxNjE5IFNvZmlh!5e0!3m2!1sen!2sbg!4v1406118634714"></iframe><br /><small><a href="https://www.google.bg/maps/place/%D0%B1%D1%83%D0%BB%D0%B5%D0%B2%D0%B0%D1%80%D0%B4+%E2%80%9E%D0%A6%D0%B0%D1%80+%D0%91%D0%BE%D1%80%D0%B8%D1%81+III%E2%80%9C+375,+1619+Sofia/@42.6584078,23.2398802,17z/data=!3m1!4b1!4m2!3m1!1s0x40aa9b50c5a03093:0x79280f4feb3c8c54&amp;source=embed" style="color:#FFF;text-align:left" target="_blank"><?php echo $CONTACT_BIGGER_MAP; ?></a></small>
                </div><!-- end of #google-map -->
            </div><!-- end of #contact-box -->


        </div><!-- end of .main-content -->      
            
    </div> <!-- end of .text-wrapper -->

<?php include('templates/aside.php') ?>

</div><!-- end of .content-wrapper -->

<?php include('templates/footer.php') ?>



