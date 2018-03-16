<!doctype html>
  <html>
      <head>
          <title>Holy car</title> 
		  <link rel="stylesheet" type="text/css" href="css/screenTest.css" media="screen">	
		  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		  <script>
		  function display() {
				var x = document.getElementById("menuDiv");
				if (x.style.display === "block") {
					x.style.display = "none";
				} else {
					x.style.display = "block";
				}
			}

         $(document).ready(function(){
         
            $('.btnHamburger').click(function() {
            	if ( $('#xHamburger').hasClass('btnHamburger') ){
                   $(this).removeClass("btnHamburger");
                   $(this).addClass("btnHamburgerX");
            	}else{
                  $(this).removeClass("btnHamburgerX");
                   $(this).addClass("btnHamburger");
            	}

               });
            
         });



	 	 </script>
		  <meta name="description" content="Holy Car Classical.Luxury, Surf Box, Adrenaline, ">
		  <meta http-equiv="content-type" content="text/html;charset=UTF-8">

     </head>
  <body>
      <header>
		 <div  onclick="display()" id="xHamburger" class="btnHamburger">		 
			 <div  class="imgHamburger  " ></div>
			 <div   class="imgHamburger " ></div>
		 </div>


		 
         <h1 ><i><span>H</span>oly car</i></h1>

		 <div class="menu">
			<ul class="menuContainer nowrap">
			  <li class="flex-item rouge linkMainMenu "><a href="#" class="menuColor">Home</a></li>
			  <li class="flex-item linkMainMenu "><a href="#">Services</a></li>
			  <li class="flex-item linkMainMenu "><a href="#">Categories</a></li>
			  <li class="flex-item linkMainMenu "><a href="#">Contact</a></li>
			</ul>
			 <form>
				<input class="loupe" type="image" src="images/loupe.png" name="mon_image" onclick="submit()" />
			 </form>
		 </div>



		<form>
			<input class="recherche" type="image" src="images/loupe.png" name="mon_image" onclick="submit()" />
		</form>
	  </header>
	  
	  		<div id="menuDiv" class="menuHamburger">

			<ul class="menuContainer nowrap">
			  <li class="menuHamburgerLi">Home</li>
			  <li class="menuHamburgerLi">Services</li>
			  <li class="menuHamburgerLi">Classical</li>
			  <li class="menuHamburgerLi">Luxury</li>
			  <li class="menuHamburgerLi">Surf Box</li>
			  <li class="menuHamburgerLi">Adrenaline</li>
			  <li class="menuHamburgerLi">Contact</li>
			</ul>
		</div>
      <main>
          <article>
              <div class="moodBoard">
				<div class="img1 imageResponsive " >
					<a href=""></a>
				</div>
				<div class="img2 imageResponsive" >
					<a href=""></a>
				</div>
				<div class="img3 imageResponsive" >
					<a href=""></a>
				</div>
				<div class="img4 imageResponsive">
					<a href=""></a>
				</div>
				<div class="img5 imageResponsive">
					<a href=""></a>
				</div>
			  </div>
			  <div class="infoTeaser">
				<h2 class="titre2">Because you deserve it</h2>
				<p class="teaser">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
				</p>
			  </div>
           </article>
      </main>
      <footer>
		  <div class="footer">
			<h1>Which category of car do you want to drive?</h1>
			<div class="menuFooter">


				<ul class="menuContainer  nowrap">
				  <li class="flex-item subMenu1"><a href="#">Classical</a></li>
				  <li class="flex-item subMenu2"><a href="#">Luxury</a></li>
				  <li class="flex-item subMenu3"><a href="#">Surf Box</a></li>
				  <li class="flex-item subMenu4"><a href="#">Adrenaline</a></li>
				</ul>
			</div>
			<div class="subMenuFooter ">
				<ul class="menuContainer nowrapFooter ">
				  <li><a href="#" class="footerMenu">Categories</a></li>
				  <li><a href="#" class="footerMenu">Model</a></li>
				  <li><a href="#" class="footerMenu">Availability</a></li>
				  <li><a href="#" class="footerMenu">Reservation</a></li>
				</ul>
			</div>
		  </div>
			<div class="copyRight">
				<a>&#9400; 2018 Holy car </a>
			</div>		  
	  </footer>
  </body>
</html>