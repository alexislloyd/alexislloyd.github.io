<!DOCTYPE html>
<html>
<head><title>NYTLabs Video Player</title></head>
<body>
<?php 
@$clip = isset($_GET['file']) ? $_GET['file'] : 'nofileset'; //expects something of the form movies/blah - must be the mov / mp4 one
@$width = isset($_GET['w']) ? $_GET['w'] : '533'; //default to 533 x 300, 16 x 9
@$height = isset($_GET['h']) ? $_GET['h'] : '300'; //default to 533 x 300, 16 x 9
/*function getFBurl($v) {

	$sharelink=""; //http://www.facebook.com/sharer.php?u=
	
	$peurl = "http://nytlabs.com/sharetarget.php?clip=";
	$sharelink .= $peurl;

	$sharelink .= $v;

	$sep = "&ref=";
	$sharelink .= $sep;
	
	$ref = urlencode($_SERVER['HTTP_REFERER']);
	$sharelink .= $ref;
	
	$sharelink .= "&title=";
	$title = htmlentities(urlencode($_GET['caption']));
	$sharelink .= $title;

	return $sharelink;
	
	/*******   NOT PHP CODE --- TO EDIT / FIX AND USE LATER AS THE SHARE / EMBED CONTROLS BELOW *************
	<p>
	Share: <input type="text" id="sharecode" name="sharecode" readonly="true" value="<?php echo getFBurl($clip); ?>" size="20"> 
	Embed:
	<input type="text" id="embedcode" name="embedcode" readonly="true" style="font-size:-2;" value="<object width='533' height='320' type='application/x-shockwave-flash' data='http://nytlabs.com/projects/movies/player5.swf'><param name='movie' value='http://nytlabs.com/projects/movies/player5.swf' /><param name='flashvars' value='file=http://nytlabs.com<?php echo $clip;?>.mov' /></object>" size="20"></input>
	</p>
	
}*/

?>

<!-- Adapted from Video for Everybody, Kroc Camen of Camen Design -->
<video width="<?php echo $width;?>" height="<?php echo $height;?>" controls autoplay id="projvid" name="projvid">
	<source src="<?php echo $clip;?>"  type="video/mp4" />
	<source src="<?php echo substr($clip,0,-3);?>ogv"  type="video/ogg" />
	<object width="<?php echo $width;?>" height="<?php echo $height;?>" type="application/x-shockwave-flash" data="http://cdn.nytlabs.com/movies/player5.swf" id="flashplayerobject">
		<param name="movie" value="http://cdn.nytlabs.com/movies/player5.swf" />
		<param name="allowfullscreen" value="true"/>
		<param name="flashvars" value="controlbar=over&amp;autostart=true&amp;file=<?php echo $clip;?>" />
	</object>
</video>
</body>
</html>
