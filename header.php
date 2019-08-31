<?php ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/static/favicon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/static/favicon.png">
<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/static/pinned-tab.svg" color="#3582F7">
<meta property="og:site_name" content="<?php echo $_SERVER['SERVER_NAME'];?>">
<meta property="og:title" content="Browse :: <?php echo $_SERVER['SERVER_NAME'];?>">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/static/img/avatar/default.png">
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="fansub, delima, delsubs, imajisubs, anime, download">
<meta property="og:description" content="<?php echo $_SERVER['SERVER_NAME'];?> homepage">

<title><?php if(is_home()) { echo bloginfo("name");echo " | ";echo bloginfo("description"); } else { echo wp_title(" | ", false, right); } ?></title>


<link href="<?php echo get_template_directory_uri() ?>/static/css/bootstrap.min.css" rel="stylesheet" id="bsThemeLink">
<link href="<?php echo get_template_directory_uri() ?>/static/css/bootstrap-xl-mod.css" rel="stylesheet">
<script>
	function toggleDarkMode(){"dark"===localStorage.getItem("theme")?setThemeLight():setThemeDark()}function setThemeDark(){bsThemeLink.href="<?php echo get_template_directory_uri() ?>/static/css/bootstrap-dark.min.css",localStorage.setItem("theme","dark")}function setThemeLight(){bsThemeLink.href="<?php echo get_template_directory_uri() ?>/static/css/bootstrap.min.css",localStorage.setItem("theme","light")}if("undefined"!=typeof Storage){var bsThemeLink=document.getElementById("bsThemeLink");"dark"===localStorage.getItem("theme")&&setThemeDark()}</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" integrity="sha256-an4uqLnVJ2flr7w0U74xiF4PJjO2N5Df91R2CUmCLCA=" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>

<link href="<?php echo get_template_directory_uri() ?>/static/css/main.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/markdown-it/8.3.1/markdown-it.min.js" integrity="sha256-3WZyZQOe+ql3pLo90lrkRtALrlniGdnf//gRpW0UQks=" crossorigin="anonymous"></script>

<script src="<?php echo get_template_directory_uri() ?>/static/js/bootstrap-select.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/static/js/main.js"></script>

<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->
<?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top navbar-inverse">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/">Nyaa</a>
</div><!--/.navbar-header -->
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
						<li><a href="/upload">Upload</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								Info
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="/rules">Rules</a></li>
								<li><a href="/help">Help</a></li>
								<li><a href="https://github.com/delsubs/Website">Github</a></li>
							</ul>
						</li>
						<li><a href="/?page=rss">RSS</a></li>
						<li><a href="https://twitter.com/NyaaV2">Twitter</a></li>
						<li><a href="//sukebei.Nyaa.si">Fap</a></li>
					</ul>
<div class="search-container visible-xs visible-sm">
<form role="search" method="get" id="searchform" class="navbar-form navbar-right form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="text" class="form-control" name="s" id="s" placeholder="Search..." value="">
<br>
<select class="form-control" title="Category" data-width="200px" name="type">
<option value="" title="All categories" selected>
All categories
</option>
<option value="tv" title="Anime -  TV">
- Anime-TV
</option>
<option value="movie" title="Anime - Movie">
- Anime-Movie
</option>
<option value="live-action" title="Anime - Live Action">
- Anime-Live Action
</option>
<option value="pv" title="Anime - PV">
- Anime-PV
</option>
</select>
<br>
<button class="btn btn-primary form-control" type="submit">
<i class="fa fa-search fa-fw"></i> Search
</button>
</form>
</div>
<form role="search" method="get" id="searchform" class="navbar-form navbar-right form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="input-group search-container hidden-xs hidden-sm">
<div class="input-group-btn nav-filter" id="navFilter-criteria">
<select class="selectpicker show-tick" title="Category" data-width="130px" name="type">
<option value="" title="All categories" selected>
All categories
</option>
<option value="tv" title="Anime - TV">
- Anime-TV
</option>
<option value="movie" title="Anime - Movie">
- Anime-Movie
</option>
<option value="live-action" title="Anime - Live Action">
- Anime-Live Action
</option>
<option value="pv" title="Anime - PV">
- Anime-PV
</option>
</select>
</div>
<div class="input-group-btn nav-filter" id="navFilter-category">

</div>
<input type="text" class="form-control search-bar" name="s" id="s" placeholder="Search..." value=""/>
<div class="input-group-btn search-btn">
<button class="btn btn-primary" type="submit">
<i class="fa fa-search fa-fw"></i>
</button>
</div>
</div>
</form>
</div>
</div>
</nav>
