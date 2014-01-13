<!DOCTYPE HTML PUBLIC "-//W�C//DTD XHTML 1.0 Transitional//EN" "http://.w3.org/TR/html1/DTD/xhtml1-transitional.dtd">
<!--Tiene sentido: desarrollado por el equpo de trabajo de (nombre de la AC)
    Erika Medina Pineda
    Froebel Ivan Galazar
    Tomas Martinez Arenas
    Alejandro Terron soto
    Octubre 2013
    web App dirigida a la ense�ansa del  Lenguage Mexicano de se�as
-->
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/localBussiness"><!--valorar si tendra las mismas validaciones que un sitio comercial-->
  <?php $nombreVentana = basename( $_SERVER['PHP_SELF'] ); ?>
    
<head>
    <meta http-equiv="Content-Type" content="txt/html; chartset=utf-8"/>
    <meta itemport="descrition" content="Tiene sentido es una App dirigida a la ensenasa de la lengua mexicana de se�as"/>
    <meta itemport="image" content="http://tieneSentido.com/application/views/images/LogoLSM.png"/>
    <meta name="Educacion, lengua, escuela, oido, sordos"/>
    <meta http-equiv="title" content="Aplicacions web, sordos, mudos, oido, salud, educacion"/>
    <meta name="kewords" content="educacion especial, salud, oido, tratamiento, clinica, lengua, coclear, implante."/>
    <meta name="DC.laguage" conten="Spanish"/>
    <meta name="language" content="ES"/>
    <meta http-equiv="Content-laguage" content="es"/>
    <meta http-equiv="Content-Type" content="text/html; chartset=windows-1252"/>
    <meta http-equiv="Content-type" content="text/html; chartset=iso-8859-1"/>
    <meta name="robots" content="ALL"/>
    <meta name="rating" content="General"/>
    <meta name="category" content="Educacion"/>
    <meta name="author" content=""/>
    <meta name="copyrihgt" content=""/>
    <meta name="robots" content="FOLLOW,INDEX"/>
    <meta name="revisit-after" content="2 days"/>
    <meta name="VW96.objettype" content="Document"/>
    <meta name="owner" content=""/>
    <meta name="Distribution" content="Document"/>
    <meta name="robots" content="index,follow,all"/>
    <title>tieneSentido</title>
    
    <?php if ($nombreVentana == 'index.php'){ ?> 
    <link rel="stylesheet" type="text/css" href="application/views/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="application/views/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="application/views/css/970_6_10.css"/>
    <link rel="shortcut icon" type="image/xicon" href="application/images/favicon.ico"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="application/helpers/utilidades/skdslider/src/skdslider.css"/>
    
    <style type="text/css">
    .demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
    #demo1{ width:100%; height:500px; margin:0 auto;}
    #demo1 ul.slides li{ height:485px;}
    .option-table td{ border-bottom:1px solid #eeeeee;}
    </style>
    
    
    <script type="text/javascript" language="javascript" src="application/controllers/javascripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" language="javascript" src="application/controllers/javascripts/funciones.js" ></script>
    <!--<script type="text/javascript" language="javascript" src="PublicResources/utilidades/js/modernizr.custom.86080.js"></script>-->
    <script type="text/javascript" laguage="javascript" src="application/helpers/utilidades/skdslider/src/skdslider.min.js"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44683724-1', 'kwplay.com');
  ga('send', 'pageview');

    </script> 
    
    <script>$(window).scroll(function()
		{
			if ($(this).scrollTop() > 50) $('nav').addClass("fixed").fadeIn();
			else $('nav').removeClass("fixed");
		});
     </script>
    
    <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo').skdslider({'delay':5000, 'fadeSpeed': 2000,'showNextPrev':true,'showPlayButton':false,'autoStart':true});
			jQuery('#demo1').skdslider({'delay':5000, 'fadeSpeed': 2000,'autoStart':true,'pauseOnHover':true});
		});
    </script>
    
   <?php }else {?> 
       
    <link rel="stylesheet" type="text/css" href="application/views/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="application/views/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="application/views/css/970_6_10.css"/>
    <link rel="shortcut icon" type="image/xicon" href="application/views/images/favicon.ico"/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="PublicResources/utilidades/skdslider/src/skdslider.css"/>
    
    <style type="text/css">
    .demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
    #demo1{ width:100%; height:500px; margin:0 auto;}
    #demo1 ul.slides li{ height:485px;}
    .option-table td{ border-bottom:1px solid #eeeeee;}
    </style>
    
    
    <script type="text/javascript" language="javascript" src="PublicResources/javascripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" language="javascript" src="PublicResources/javascripts/funciones.js" ></script>
    <!--<script type="text/javascript" language="javascript" src="PublicResources/utilidades/js/modernizr.custom.86080.js"></script>-->
    <script type="text/javascript" laguage="javascript" src="PublicResources/utilidades/skdslider/src/skdslider.min.js"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44683724-1', 'kwplay.com');
  ga('send', 'pageview');

    </script> 
    
    <script>$(window).scroll(function()
		{
			if ($(this).scrollTop() > 50) $('nav').addClass("fixed").fadeIn();
			else $('nav').removeClass("fixed");
		});
     </script>
    
    <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo').skdslider({'delay':5000, 'fadeSpeed': 2000,'showNextPrev':true,'showPlayButton':false,'autoStart':true});
			jQuery('#demo1').skdslider({'delay':5000, 'fadeSpeed': 2000,'autoStart':true,'pauseOnHover':true});
		});
    </script>
  <?php } ?> 
   
    
</head>

<body>
<?php if ($nombreVentana == 'index.php'){ ?>
    <header>
        
        
		<nav>
                    
                    
			<ul>
                                 <li><div id="logo" class="DivLogo"><img src="application/views/images/logoLSM.png" width="70" height="70"/></div></li>
                              
                                 <li><a href="html/quienes.php">&iquest;Qui&eacute;nes somos?</a></li>
                                 <li><a href="html/mision.php">Misi&oacute;n</a></li>
                                 <li><a href="html/vision.php">Visi&oacute;n</a></li>
				<li><a href="html/objetivos.php">Objetivos</a></li>
                                <li><a href="html/contacto.php">Contacto</a></li>
			</ul>
		</nav>
    </header>

<?php }else {?> 
    
   <header>
        
        
		<nav>
                    
                    
			<ul>
                                 <li><div id="logo" class="DivLogo"><img src="application/views/images/logoLSM.png" width="70" height="70"/></div></li>
                              
                                 <li><a href="../index.php">Inicio</a></li>
                                 <li><a href="../html/mision.php">Misi&oacute;n</a></li>
                                 <li><a href="../html/vision.php">Visi&oacute;n</a></li>
				<li><a href="../html/objetivos.php">Objetivos</a></li>
                                <li><a href="../html/contacto.php">Contacto</a></li>
			</ul>
		</nav>
    </header>
    
   <?php } ?>   
    
        
        


