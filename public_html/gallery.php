<?php
    $page = 'Dances';
    include('templates/header.php');
?>

 <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>

<div class="content-wrapper">

    <div class ="text-wrapper">
        <div class="main-content clearfix">
            <h1 class="page-title">Галерия</h1>
           
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 600px; margin-left: auto; margin-right: auto;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 600px; overflow: hidden;">
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
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
    <!-- Jssor Slider End -->
        </div><!-- end of .main-content -->      
            
    </div> <!-- end of .text-wrapper -->

<?php include('templates/aside.php') ?>

</div><!-- end of .content-wrapper -->

<?php include('templates/footer.php') ?>



