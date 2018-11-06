<?php
	$date = '7th March 2019';
	$address = 'Lighthouse, Kensington Street, Brighton, BN1 4AJ';
	$tickets_on_sale = (time() > strtotime('10:00am 1st September 2017'));
	$tickets = ($tickets_on_sale) ? '#tickets' : 'https://www.eventbrite.com/e/bytes-conf-2017-tickets-37126523431';
	$ticket_text = ($tickets_on_sale) ? 'Tickets on sale!' : 'Tickets on sale 1st Sept'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">

	<link rel="shortcut icon" href="/assets/bytes/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="500x500" href="/assets/bytes/img/bytes-favicon.png">

	<meta itemprop="name" content="<?php echo $name; ?>">
	<meta itemprop="description" content="<?php echo $description; ?>">
	<meta itemprop="image" content="https://www.bytesconf.co.uk/assets/bytes/img/bytes-favicon.png">

	<meta name="twitter:site" content="@bytesconf">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:title" content="<?php echo $name; ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:domain" content="www.bytesconf.co.uk" />
	<meta name="twitter:image" content="https://www.bytesconf.co.uk/assets/bytes/img/logo.png" />
	<meta name="twitter:url" content="https://www.bytesconf.co.uk" />
	<meta name="twitter:creator" content="@bytesconf">
	<meta name="twitter:label1" content="📆 Date" />
	<meta name="twitter:data1" content="<?php echo $date; ?>" />
	<meta name="twitter:label2" content="🗺 Location" />
	<meta name="twitter:data2" content="Lighthouse, Brighton, BN1 4AJ" />

	<meta property="og:title" content="<?php echo $name; ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://www.bytesconf.co.uk" />
	<meta property="og:image" content="https://www.bytesconf.co.uk/assets/bytes/img/bytes-favicon.png"/>
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:site_name" content="<?php echo $name; ?>" />

	<link rel="stylesheet" href="/assets/bytes-2019/css/screen.css?2991">
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-62725695-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
