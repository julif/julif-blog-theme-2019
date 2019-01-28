<nav>
	<div id="main_nav_content">
         <div class="nav_hamburger"  id="flip"> <i class="fas fa-bars"></i></div>	
		<div class="nav_brand"> 
			<a  href="<?php echo get_home_url(); ?> ">
				<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/b66f10b3-1a0a-4898-acea-6730d9dff843/dcxfnjc-90cf5e1a-4e2b-4d9c-8bf6-6b393b8eb8df.png" width="112" height="28">
			</a>
		</div>
		<div class="nav_content_right">
            <div id="panel">
                <div class="nav_wrapper" >
                    <ul class="nav_list">
                        <li class="nav_links"><a class="active" href="#">Blog</a></li>
                        <li class="nav_links"><a href="#">Proyectos</a></li>
                        <div class="dropdown">
                            <li class="nav_links" >
                                <button class="dropbtn">Comics <span>▼</span></button>
                                <ul class="nav_dropdown">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">Web Development</a></li>
                                    <li><a href="#!">Graphic Design</a></li>
                                </ul>
                            </li>
                        </div>
                       <!--  <li class="nav_links"><a  class="unactive" href="#">Disabled</a></li> -->
                    </ul>
                    <div class="nav_socialinks">
                        <a href="https://twitter.com/julian_julif"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/JulifIsBetterThanYourMom/"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/_julif_/"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/julif"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
			<div class="nav_theme" onclick="theme_toggle()" id="btn_theme"><i class="fas fa-moon"  alt="tema claro/oscuro"></i></div>
		</div>		
	</div>	
</nav>

    <script> 
    $(document).ready(function(){
      $("#flip").click(function(){
       // $("#panel").slideToggle("slow");
       $("#panel").fadeToggle();
     });
  });
</script>