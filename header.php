<html>
<body>
<head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">

    <title>On Comunicazione</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Custom CSS -->
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/customstyle.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/svg.css" type="text/css" rel="stylesheet"/>
    
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/mediaquery.css" type="text/css" rel="stylesheet"/>
     <link href="<?php echo get_bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>

<body id="wrapper">


 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
				<?php wp_nav_menu( array(
                        'menu'  => 'main',
                        'menu_class'  => 'nav navbar-nav',
                ) );
                ?>

         
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>