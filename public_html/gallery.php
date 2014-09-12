<?php
    $page = 'gallery';
	define("current_page", "gallery");
    include('templates/header.php');
?>

	<script type="text/javascript" src="js/libs/jssor.slider.min.js"></script>
	<script type="text/javascript" src="js/libs/jssor.player.ytiframe.min.js"></script>
    <script>
         jssor_slider1_starter = function (containerId) {
            var options = {
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>
	
	<script>
        jssor_slider2_starter = function (containerId) {
            var options2 = {
                $AutoPlay: true,                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3,                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlayInterval: 4000,            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
                

                $BulletNavigatorOptions: {                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 1,                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider2 = new $JssorSlider$(containerId, options2);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$SetScaleWidth(Math.min(parentWidth, 640));
                else
                    $JssorUtils$.$Delay(ScaleSlider, 30);
            }

            //Scale slider immediately
            ScaleSlider();
            //Scale slider after window load
            $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $JssorUtils$.$OnWindowResize(window, ScaleSlider);
            }

            if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                $JssorUtils$.$AddEvent(window, "orientationchange", ScaleSlider);
            }
            //responsive code end

            //fetch and initialize youtube players
            $JssorPlayer$.$FetchPlayers(document.body);
        };
    </script>

<div class="content-wrapper">

    <div class ="text-wrapper">
        <div class="main-content clearfix">
            <h1 class="page-title"><?php echo $GALLERY_TITLE_PICTURES; ?></h1>
			<!-- Images Gallery Slider Begin-->
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 750px; height: 500px; margin-left: auto; margin-right: auto;">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 750px; height: 500px; overflow: hidden;">
					<?php
					$dir = './images/gallery_small';
					$start = '<div><img u="image" src="';
					$end = '" /></div>';
					if ($handle = opendir($dir)) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								echo $start . $dir . '/' . $entry . $end;
							}
						}
						closedir($handle);
					}
					?>
				</div>
		
				<!-- Arrow Navigator Skin Begin -->
				<style>
					/* jssor slider arrow navigator skin 03 css */
					/*
					.jssora03l              (normal)
					.jssora03r              (normal)
					.jssora03l:hover        (normal mouseover)
					.jssora03r:hover        (normal mouseover)
					.jssora03ldn            (mousedown)
					.jssora03rdn            (mousedown)
					*/
					.jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
					{
						position: absolute;
						cursor: pointer;
						display: block;
						background: url(images/a03.png) no-repeat;
						overflow:hidden;
					}
					.jssora03l { background-position: -3px -33px; }
					.jssora03r { background-position: -63px -33px; }
					.jssora03l:hover { background-position: -123px -33px; }
					.jssora03r:hover { background-position: -183px -33px; }
					.jssora03ldn { background-position: -243px -33px; }
					.jssora03rdn { background-position: -303px -33px; }
				</style>
				<!-- Arrow Left -->
				<span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 250px; left: 8px;"></span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 250px; right: 8px"></span>
				<!-- Arrow Navigator Skin End -->

		
				<!-- Trigger -->
				<script>
					jssor_slider1_starter('slider1_container');
				</script>
			</div>
			<!-- Images Gallery Slider End-->
			<br/>
			<h1 class="page-title"><?php echo $GALLERY_TITLE_VIDEOS; ?></h1>
			<!-- Video Gallery Slider Begin-->
			<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px;margin-left: auto; margin-right: auto;">
				<!-- Slides Container -->
				<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 390px; overflow: hidden;">
				<?php
				$file = fopen("videos.txt", "r");
				$start_video = '<div><div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">';
				$end_video = '<!-- play cover begin (optional, can remove play cover) -->
							<div u="cover" class="videoCover" style="position: absolute; top: 0px; left: 0px; background-color: #000; background-position: center center; background-repeat: no-repeat; filter: alpha(opacity=40); opacity: .4; cursor: pointer; display: none; z-index: 1;"></div>
							<!-- play cover end -->
							<!-- close button begin (optional, can remove close button) -->
							<style>
								.closeButton { background-image: url(images/close.png); }
								.closeButton:hover { background-position: -30px 0px; }
							</style>
							<div u="close" class="closeButton" style="position: absolute; top: 0px; right: 1px;
								width: 30px; height: 30px; background-color: #000; cursor: pointer; display: none; z-index: 2;">
							</div>
							<!-- close button end -->
						</div>
					</div>';		
				while(!feof($file)){
					$line = fgets($file);
					if (empty(trim($line)) == false) {
						echo $start_video;
						echo $line;
						echo $end_video;		
					}					
				}
				fclose($file);	
				?>	
				</div>
				
				<!-- Bullet Navigator Skin Begin -->
				<style>
					/* jssor slider bullet navigator skin 03 css */
					/*
					.jssorb03 div           (normal)
					.jssorb03 div:hover     (normal mouseover)
					.jssorb03 .av           (active)
					.jssorb03 .av:hover     (active mouseover)
					.jssorb03 .dn           (mousedown)
					*/
					.jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
					{
						background: url(images/b03.png) no-repeat;
						overflow:hidden;
						cursor: pointer;
					}
					.jssorb03 div { background-position: -5px -4px; }
					.jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
					.jssorb03 .av { background-position: -65px -4px; }
					.jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
				</style>
				<!-- bullet navigator container -->
				<div u="navigator" class="jssorb03" style="position: absolute; bottom: 6px; left: 6px;">
					<!-- bullet navigator item prototype -->
					<div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><NumberTemplate></NumberTemplate></div>
				</div>
				<!-- Bullet Navigator Skin End -->
        
				<!-- Trigger -->
				<script>
					jssor_slider2_starter('slider2_container');
				</script>
			</div>
			<!-- Video Gallery Slider End-->
			
        </div><!-- end of .main-content -->      
            
    </div> <!-- end of .text-wrapper -->

<?php include('templates/aside.php') ?>

</div><!-- end of .content-wrapper -->

<?php include('templates/footer.php') ?>



