<!DOCTYPE html>
<html lang="es-AR">
<head>
  <!-- meta -->
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0"><!-- hacer que el ancho se adapte a dispositivos -->
  <!-- css -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css" type="text/css" media="screen" /><!-- hoja de estilos pricipal -->
  <link href="<?php bloginfo('template_url')?>/css/Tranquil_Heart.css" type="text/css" rel="stylesheet" /><!-- resaltador de sintaxis -->
  <link rel="stylesheet" id="theme" href=""><!-- tema claro/oscuro -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><!-- iconos fontawesome -->
  <link rel='stylesheet' id='dashicons-css'  href='<?php echo get_home_url(); ?>/wp-includes/css/dashicons.min.css?ver=5.0.2' type='text/css' media='all' /><!-- iconos dashicon -->
  <!-- <link rel="alternate" type="application/rss+xml" title="julif-blog &raquo; ¡Hola mundo! RSS de los comentarios" href="http://localhost/2018/12/10/hola-mundo/feed/" /> -->
  <link rel='stylesheet' id='admin-bar-css'  href='<?php echo get_home_url(); ?>/wp-includes/css/admin-bar.min.css?ver=5.0.2' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-block-library-css'  href='<?php echo get_home_url(); ?>/wp-includes/css/dist/block-library/style.min.css?ver=5.0.2' type='text/css' media='all' /><!-- estilos para guttemberg -->
  <link rel='https://api.w.org/' href='<?php echo get_home_url(); ?> /wp-json/' />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo get_home_url(); ?>/xmlrpc.php?rsd" />
  <!-- <style type="text/css" media="print">#wpadminbar { display:none; }</style> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- ......................................... -->
  <?php if (  is_front_page() ) : ?>
    <title> julif-blog</title>
    <?php   else :?>
      <title> <?php the_title(); ?> &#8211; julif-blog</title>
  <?php endif; ?>
<!-- ......................................... -->  
</head>
<body>
  <?php include(TEMPLATEPATH."/navbar.php"); ?>




<script type="text/javascript">
  //tema por defecto
  var active_theme="ligth"; 
  //en  caso de haber selecionado otro tema, este remplazara a el tema por defecto.
  if (localStorage.Julifweb_theme != undefined){ active_theme = localStorage.Julifweb_theme;}
  //ruta de css
  document.getElementById("theme").href="<?php bloginfo('template_url')?>/css/"+active_theme+".css";
  //cambia el texto de el boton dependiendo cual es el tema activo

  /*---- cambiar de theme  Ligth/Dark------*/

  function theme_toggle(){
    if (active_theme === "ligth") {
      document.getElementById("theme").href="<?php bloginfo('template_url')?>/css/dark.css";
      active_theme="dark";
     
      localStorage.Julifweb_theme =active_theme; //guarda el tema seleccionado en un localstorage
    }
    else if (active_theme === "dark") {
      document.getElementById("theme").href="<?php bloginfo('template_url')?>/css/ligth.css";
      active_theme="ligth";
   
      localStorage.Julifweb_theme =active_theme; //guarda el tema seleccionado en un localstorage
    }
  } 

</script>