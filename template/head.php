    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Try out college life on BYU campus while improving your ACT score! ACT College Prep Camp is unlike any other camp at BYU. Try out life in the dorms! Meet new friends! Get the low-down on how to order from the secret smoothie menu at Jamba Juice in the Wilkinson Student Center—all while gaining tools you need to be admitted to college." />
    <meta name="author" content="Your Department Name" />
    <meta name="keywords" content="ACT Camp,Proactive,ACT Up,ACT Test Prep,ACT Preparation" />
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="template/img/favicon.ico" />
    <link rel="stylesheet" href="//cloud.typography.com/75214/740862/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo $html_base_dir ?>/css/base.css" />
    <link rel="stylesheet" href="<?php echo $html_base_dir ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo $html_base_dir ?>/css/proACTive.css" />
		<link rel="stylesheet" href="/site/template/css/plugins/socialmedia.css" />
<?php
$default_google_header_data = <<<EOL
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2108793-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
EOL;
if(isset($google_header_data)) {
	echo $google_header_data;
} else {
	echo $default_google_header_data;
}
if(isset($extra_header_data)) {
	echo $extra_header_data;
	if(!preg_match("/modernizr/i",$extra_header_data)) {
		echo '<script src="'.$html_base_dir.'/js/modernizr.js"></script>
    <script src="'.$html_base_dir.'/js/init.js"></script>';
	}
} else {
	echo '<script src="'.$html_base_dir.'/js/modernizr.js"></script>
	<script src="'.$html_base_dir.'/js/init.js"></script>';
}
?>    
