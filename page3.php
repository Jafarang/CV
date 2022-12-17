<html>
	<head>
		<title>jafar</title>
		<style>
			* {
  padding: 0;
  margin: 0;
}
.logo {
  height: 100%;
}
.nav {
  display: flex;
  align-items: center;
  background: #085158;
  height: 5.5rem;
  padding: 0 1em 0 1em;
  /* Feel free to use a different font */
  font-family: "Open Sans", sans-serif;
  font-size: 1.1em;
  flex: 0.5;
  box-shadow: 0 2px 2px -2px rgba(0, 0, 0, 0.2);
}

.nav ul {
  display: flex;
  list-style: none;
  height: 100%;
  justify-content: end;
  align-items: center;
  flex: 1;
}

.nav .item {
  justify-content: center;
  align-items: center;
  display: flex;
  height: 100%;
}

.nav a {
  text-decoration: none;
  color: white;
  height: 100%;
  text-transform: uppercase;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px 0 25px;
  transition: 0.1s;
  white-space: nowrap;
}

.nav a:hover {
  background-color: #05373c;
  transition: 0.1s;
}
/* Icon padding */
.nav a i {
  margin-right: 10px;
}

/* Denotes the active menu item */
.active {
  background-color: #05373c;
  transition: 0.1s;
}

/* Mobile Menu Toggle */
.toggle {
  display: none;
  position: fixed;
  top: 34px;
  right: 30px;
  color: white;
  font-size: 1.1em;
  background-color: none;
  cursor: pointer;
  pointer-events: auto;
}

/* Animation Easing */
.animatedtoggle {
  transition: all 0.1s ease;
}
/* Rotate Menu item on toggle*/
.rotate {
  transform: rotate(90deg);
  transition: all 0.2s ease-in-out;
}

/* Mobile menu breakpoint */
@media screen and (max-width: 950px) {
  .menu {
    display: block;
  }
  .nav {
    display: block;
    height: fit-content;
  }

  .nav ul {
    display: block;
    margin-top: 1em;
    padding-bottom: 1em;
  }
  .nav ul .item {
    display: block;
  }
  .logo {
    height: 88px;
  }
  .nav a {
    height: 60px;
    justify-content: start;
  }
  /* Display the toggle */
  .toggle {
    display: block;
    background-color: transparent;
    border: none;
  }
  /* Hide the primary nav */
  ul.inactive {
    display: none;
  }
}




.footer {
  position: relative;
  background: #05b3a4;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top:35%;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}
.menu__link:hover{
	color: white;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 15px 0 10px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.imgur.com/ZAts69f.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
#txtbox11 {
    height: 150px;
    width : 500px;
	}
#txtbox1 {
	width : 500px;
	}
		</style>
	</head>
	<body bgcolor="yellow">
	
	<nav class="nav">
  <button onclick="mobileMenu()" id="menuBars" type="button" class="toggle"><i id="menuIcon" class="fa-solid fa-bars animatedtoggle"></i></button>

  <ul id="menuList" class="menu inactive">
   <li class="item"><a href="page1.php"><i class="fa-light fa-ticket"></i>Skills and Abilities</a></li>
    <li class="item"><a href="page2.php"><i class="fa-light fa-ferry"></i>Honors and Achivements</a></li>
    <li class="item"><a href="page3.php"><i class="fa-light fa-calendar-days"></i>Contact Me</a></li>
    <li class="item"><a href="main.php"><i class="fa-light fa-circle-question"></i>Jafar</a></li>

  </ul>
</nav>

	<form method="POST" action="submit.php" id="myform">
		<input type="text" placeholder="name" name="name" size="40"/><br>
		<input type="text" placeholder="email" name="email" id="txtbox1"><br>
		<input type="text" placeholder="message" name="message" id="txtbox11">
		
	</form>

	<button onClick="show();"> submit </button><br>
	<div id='accept'></div>
		
<footer class="footer" >
	<div class="waves">
		<div class="wave" id="wave1"></div>
		<div class="wave" id="wave2"></div>
		<div class="wave" id="wave3"></div>
		<div class="wave" id="wave4"></div>
	</div>

	<ul class="menu">
		<li class="menu__item"><a class="menu__link" href="main.php">Home</a></li>
		<li class="menu__item"><a class="menu__link" href="page3.php">Contact me</a></li>	
	</ul>

</footer>
		
		<script>
			function show()
			{
				document.getElementById('accept').innerHTML='<font size="18" color="navy">are you sure?</font> <br> <input type="submit" form="myform" name="kooft" value="yes"/><button onclick="show3();">no</button>';
			}
			function show2()
			{
				document.getElementById('accept').innerHTML='got it.';
			}
			function show3()
			{
				document.getElementById('accept').innerHTML='';
			}
		</script>

			</body>
</html>