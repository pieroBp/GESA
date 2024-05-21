<?php include_once "includes/header.php"; ?>


 
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Productos de la Distribuidora PATITAS</h1>
	</div>


<style type="text/css">
body{
  background-color: lightgrey;
  font-family: sans-serif;
}

.container{
  margin: auto;
  background-color: none;
  width: 700px;
  padding: 50px;
} 

ul, li {
    padding: 0;
    margin: 0;
    list-style: none;
}

ul.slider{
  position: relative;
  width: 700px;
  height: 250px;
}

ul.slider li {
    position: absolute;
    left: 0px;
    top: 0px;
    opacity: 0;
    width: inherit;
    height: inherit;
    transition: opacity .5s;
    background:#fff;
}



ul.slider li img{
  width: 100%;
  height: 300px;
  object-fit: cover;
}

ul.slider li:first-child {
    opacity: 1; /*Mostramos el primer <li>*/
}

ul.slider li:target {
    opacity: 1; /*Mostramos el <li> del enlace que pulsemos*/
}

.menu{
  text-align: center;
  margin: 20px;
}

.menu li{
  display: inline-block;
  text-align: center;
}

.menu li a{
  display: inline-block;
  color: white;
  text-decoration: none;
  background-color: grey;
  padding: 10px;
  width: 20px;
  height: 20px;
  font-size: 20px;
  border-radius: 100%;
}

</style>

<body>

	<!-- Content Row -->
	 


 <div class="container">
  
  <ul class="slider">
    <li id="slide1">
      <img src="img/comida1.png" width="100" height="100" />
    </li>
    <li id="slide2">
      <img src="img/medicamento1.png" width="100" height="100"/>
    </li>
    <li id="slide3">
       <img src="img/cosas1.jpg" width="100" height="100"/>
    </li>
  </ul>
  
 
  
</div>

 <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
     <li>
      <a href="#slide3">3</a>
    </li>
  </ul>
		<!-- Earnings (Monthly) Card Example -->
		 

		<!-- Earnings (Monthly) Card Example -->
		 

		<!-- Earnings (Monthly) Card Example -->
		 

		<!-- Pending Requests Card Example -->
		 
	 <!--	<div class="col-lg-6">
			<div class="au-card m-b-30">
				<div class="au-card-inner">
					<h3 class="title-2 m-b-40">Productos con stock mínimo</h3>
					<canvas id="sales-chart"></canvas>
				</div>
			</div>
		</div>-->
		 


</body>
</div>

<?php include_once "includes/footer.php"; ?>