<?php
/**
 * The sidebar containing the front page how it works.
 *
 * @package SoFi
 * @subpackage Sofi
 * @since SoFi 1.0
 */

?>

<div class="howitworks-details">
	
	<div>
		<h2>A Community That Cares About You</h2>
		<h4>Access to an alumni community vested in your success</h4>
		<span>
			<!-- first try HTML5 playback: if serving as XML, expand `controls` to `controls="controls"` and autoplay likewise -->
			<!-- warning: playback does not work on iOS3 if you include the poster attribute! fixed in iOS4.0 -->
			<video id="0" controls width="960" height="540" poster="/wp-content/themes/sofiwp/images/video/video-screenshot.jpg" onclick="this.play();">
				<source src="/wp-content/themes/sofiwp/images/video/SoFiNoBanks.mp4" type='video/mp4'>
				<source src="/wp-content/themes/sofiwp/images/video/SoFiNoBanks.ogv" type='video/ogg; codecs="theora, vorbis"'/>
				<source src="/wp-content/themes/sofiwp/images/video/SoFiNoBanks.webm" type='video/webm' >
				<!-- fallback to Flash: -->
				<object width="960" height="540" type="application/x-shockwave-flash" data="/wp-content/themes/sofiwp/images/video/SoFiNoBanks.SWF">
					<!-- Firefox uses the `data` attribute above, IE/Safari uses the param below -->
					<param name="movie" value="/wp-content/themes/sofiwp/images/video/SoFiNoBanks.SWF" />
					<param name="flashvars" value="controlbar=over&amp;image=/wp-content/themes/sofiwp/images/video/SoFiNoBanks.JPG&amp;file=/wp-content/themes/sofiwp/images/video/SoFiNoBanks.MP4" />
					<!-- fallback image. note the title field below, put the title of the video there -->
				</object>
			</video>
		</span>
		<input type="button" id="learn-more-community" class="button" url="<?php echo get_permalink( get_page_by_path( 'community' ) ); ?>" value="Learn More about the SoFi Community" />
	</div>

</div>