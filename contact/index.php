<!doctype html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-48837942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-48837942-1');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Contact — George Barnick</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
<link rel="canonical" href="https://www.georgebarnick.com/contact/"/>
<meta property="og:site_name" content="George Barnick"/>
<meta property="og:title" content="Contact"/>
<meta property="og:url" content="https://www.georgebarnick.com/contact/"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="&lt;meta property=&quot;og:title&quot; content=&quot;George Barnick - Contact&quot; /&gt; &lt;meta property=&quot;og:description&quot; content=&quot;Contact me...&quot; /&gt;"/>
<meta property="og:image" content="//www.georgebarnick.com/img/avatar_20190702.jpg"/>
<meta property="og:image:width" content="1000"/>
<meta property="og:image:height" content="1000"/>
<meta itemprop="name" content="Contact"/>
<meta itemprop="url" content="https://www.georgebarnick.com/contact/"/>
<meta itemprop="description" content="&lt;meta property=&quot;og:title&quot; content=&quot;George Barnick - Contact&quot; /&gt; &lt;meta property=&quot;og:description&quot; content=&quot;Contact me...&quot; /&gt;"/>
<meta itemprop="thumbnailUrl" content="//www.georgebarnick.com/img/avatar_20190702.jpg"/>
<link rel="image_src" href="//www.georgebarnick.com/img/avatar_20190702.jpg" />
<meta itemprop="image" content="//www.georgebarnick.com/img/avatar_20190702.jpg"/>
<meta name="twitter:title" content="Contact"/>
<meta name="twitter:image" content="//www.georgebarnick.com/img/avatar_20190702.jpg"/>
<meta name="twitter:url" content="https://www.georgebarnick.com/contact/"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content="&lt;meta property=&quot;og:title&quot; content=&quot;George Barnick - Contact&quot; /&gt; &lt;meta property=&quot;og:description&quot; content=&quot;Contact me...&quot; /&gt;"/>
<meta name="description" content="&lt;meta property=&quot;og:title&quot; content=&quot;George Barnick - Contact&quot; /&gt;
&lt;meta property=&quot;og:description&quot; content=&quot;Contact me...&quot; /&gt;" />
<link rel="stylesheet" type="text/css" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script defer src="/fontawesome/js/all.js"></script>
<script async defer src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<div id="site">
		<div id="headerWrapper">
			<header id="header">
				<div id="headerInfo">
					<h1 class="logo site-title" style="letter-spacing: 0em;">
						<a href="/" title="George Barnick" role="bookmark">
							<span class="placed-site-title">George Barnick</span>
						</a>
					</h1>
					<div id="navBlock" role="navigation">
						<nav class="main-nav" data-content-field="navigation">
							<ul>
								<li class="page-collection">
									<a href="/">About</a>
								</li>
								<li class="page-collection active-link">
									<a href="/contact/">Contact</a>
								</li>
								<li class="external-link">
									<a href="https://www.facebook.com/GeorgeBarnick" target="_blank">Facebook</a>
								</li>
								<li class="external-link">
									<a href="https://www.github.com/georgebarnick" target="_blank">GitHub</a>
								</li>
								<li class="external-link">
									<a href="https://www.linkedin.com/in/georgebarnick" target="_blank">LinkedIn</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<div id="pageWrapper" class="hfeed" role="main">
			<section id="page" data-content-field="main-content">
				<?php
					if ( isset( $_GET['result'] ) ) {
						?><p><?php
						switch ( $_GET['result'] ) {
							case "success":
								echo "Thank you for the message.";
								break;
							case "error":
								echo "Message failed to send. Be sure to fill out each field and make sure your email is entered correctly.<br />If this error persists, please manually send an email to <a href='mailto:contact@georgebarnick.com'>contact@georgebarnick.com</a>.";
								break;
							case "verificationfail":
								echo "Message failed to send. Failed to pass at least one anti-spam measure. Your message has been preserved below to try resending.<br />If this error persists, please manually send an email to <a href='mailto:contact@georgebarnick.com'>contact@georgebarnick.com</a>.";
								break;
						}?></p><?php
					} ?>
				<p>
					<form action="contact.php" method="post">
						<div class="form-title">Name&nbsp;*</div>
						<input type="text" name="cf_name"<?php if ( isset( $_GET['name'] ) ) { echo ' value="' . $_GET['name'] . '"'; } ?>><br />
						<div class="form-title">Email&nbsp;Address&nbsp;*</div>
						<input type="text" name="cf_email"<?php if ( isset( $_GET['email'] ) ) { echo ' value="' . $_GET['email'] . '"'; } ?>><br />
						<div class="form-title">Message&nbsp;*</div>
						<textarea name="cf_message"><?php if ( isset( $_GET['message'] ) ) { echo $_GET['message']; } ?></textarea><br />
						<span style="display:none;visibility:hidden;">
						<div class="form-title">Don't&nbsp;complete&nbsp;this&nbsp;field&nbsp;*</div>
						<input type="text" name="cf_website" value="" size="40" tabindex="-1" autocomplete="off">
						</span>
						<div class="g-recaptcha" data-sitekey="6LfTi3wUAAAAAO46kodXvVYHnMY_uY2GyktouZGq"></div>
						<input type="submit" value="Submit"><br clear="all" />
					</form>
				</p>
			</section>
		</div>
		<div id="footerWrapper">
			<footer id="footer">
				<div id="social" class="social-links">
					<a class="social-icon" href="//www.facebook.com/GeorgeBarnick" target="_blank"><i class="fab fa-facebook"></i></a>
					<a class="social-icon" href="//www.linkedin.com/in/georgebarnick/" target="_blank"><i class="fab fa-linkedin"></i></a>
					<a class="social-icon" href="//www.twitter.com/georgebarnick" target="_blank"><i class="fab fa-twitter"></i></a>
					<a class="social-icon" href="//www.instagram.com/georgebarnick" target="_blank"><i class="fab fa-instagram"></i></a>
					<a class="social-icon" href="//www.github.com/georgebarnick" target="_blank"><i class="fab fa-github"></i></a>
					<a class="social-icon" href="//www.flickr.com/photos/georgebarnick" target="_blank"><i class="fab fa-flickr"></i></a>
				</div>
				<div id="footerBlock">
					<p style="margin: 0; text-align: center; font-size: 14px;">
						Copyright © <?php echo date("Y"); ?>, George Barnick. All Rights Reserved.
					</p>
				</div>
			</footer>
		</div>
	</div>
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-PSLuHGN8ESzUr"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-PSLuHGN8ESzUr.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
</body>
</html>
