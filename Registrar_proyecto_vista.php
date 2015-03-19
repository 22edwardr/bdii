<!DOCTYPE html>
<html lang="en">
<head>
<title>Registrar</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
</head>


</head>
<body id="page3">
<div class="body6">

	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<h1><a href="index.html" id="logo">Deliccio Classic European Cuisine</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html"><img src="images/icon_1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/icon_2.gif" alt=""></a></li>
						<li class="end"><a href="Contacts.html"><img src="images/icon_3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="Empecemos.html">Empecemos</a></li>
							<li class "active"><a href="Registrar.html">Registrar</a></li>
							<li><a href="Consultar.html">Consultar</a></li>
							<li><a href="Contacto.html">Contacto</a></li>
					</ul>
				</nav>
			</header>
			<form method="POST" action= "Registrar_proyecto.php">
			<div id="campos">
			<center><table id="formul"></center>
			<tbody>
		<TR class="campos">
			<TH COLSPAN="2"><br>Ingrese los datos del proyecto a registrar</TH>
		</TR>
		<TR>
			<TD><br>Codigo *</H2></TD>
			<TD><br><input type="text" name="Codigo" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
		<TR>
			<TD>Titulo *<br></TD><br>
			<TD><input type="text" name="Titulo" value="" size="20" maxlength="20" required></TD>
		</TR>
		<TR>
			<TD>Descripcion *<br></TD><br>
			<TD><input type="textarea" name="Descripcion" value=""  rows="50" cols="40" required></TD>
		</TR>
		<TR>
			<TD>Fecha *<br></TD><br>
			<TD><input type="date" name="Fecha" ></TD>
		</TR>
		<TR>
			<TD>Programa *<br></TD>
			<TD><select name="Programa" required>
				<?php	
				include 'bd.php';
				$conexion= new bd;
				$sql="SELECT * FROM programa";
				$result=$conexion->comandosql($sql);
				while($row = mysql_fetch_row($result)){
					?><option value="<?php echo $row[0]; ?>">
						<?php echo $row[1]; ?>
					</option>
				<?php 
					}
				?>
					</option>
				</select>
			</TD>
		</TR>

		<TR>
			<TD>Estado *<br></TD>
			<TD><select name="Estado" required>
					<option value="Aprobado" selected>
						Aprobado
					</option>
					<option value="Aplazado">
						Aplazado
					</option>
					<option value="No aprobado">
						No aprobado
					</option>
				</select>
			</TD>
		</TR>

		<TR>
			<TD>Linea *<br></TD>
			<TD><select name="Linea" required>
			<?php	
				$sql="SELECT * FROM linea";
				$result=$conexion->comandosql($sql);
				while($row = mysql_fetch_row($result)){
					?><option value="<?php echo $row[0]; ?>">
						<?php echo $row[1]; ?>
					</option>
				<?php 
					}
				?>
				</select>	
			</TD>
		</TR>

		<TR>
			<TD>Director *<br></TD>
			<TD><select name="Director" required>
			<?php
				$sql="SELECT profesor.Numero_documento,Nombre1,Apellido1 FROM persona,profesor WHERE persona.Numero_documento=profesor.Numero_documento AND Tipo!='Jurado'";
				$result=$conexion->comandosql($sql);
				while($row = mysql_fetch_row($result)){
					?><option value="<?php echo $row[0]; ?>">
						<?php echo $row[1]." ".$row[2]; ?>
					</option>
				<?php 
					}
				?>
				</select>	
			</TD>
		</TR>

		

		


		<TR>
			<TH COLSPAN="2">Los valores con "*" son de caracter obligatorio<br></TH>
		</TR>
		<TR class="boton">
			<TD  align="center"COLSPAN="2"><br><input type="submit" name="enviar" value="Ingresar"><br></TD>
		</TR>
	</body>
</TABLE>
</form>
</div>
<!-- / header -->
<!-- content -->
			<article id="formul">
				<div class="wrap">
					<<section class="cols">
						<div id="campos">
							
 

						</div>
					</section>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main">
		<article id="content2">
			<div class="wrapper">
				<section class="pad_left1">
					<div class="wrapper">
						<div class="cols">
							<!--<h2>Alcohol Delivery</h2>
						</div>
						<div class="col3 pad_left1">
							<h2>Our Wine List</h2>
						</div>
					</div>
					<div class="line1">
						<div class="wrapper line2">
							<div class="cols">
								<div class="wrapper pad_bot1">
									<figure class="pad_bot1"><img src="images/page3_img4.jpg" alt=""></figure>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
								</div>
							</div>
							<div class="cols pad_left1">
								<div class="col2">
									<ul class="price">
										<li><a href="#">Sed ut perspiciatis unde</a><span>$15</span></li>
										<li><a href="#">Omnis iste natus error</a><span>$23</span></li>
										<li><a href="#">Sit voluptatem accusantium</a><span>$57</span></li>
										<li><a href="#">Doloremque laudantium</a><span>$47</span></li>
										<li><a href="#">Totam rem aperiam</a><span>$87</span></li>
										<li><a href="#">Eaque ipsa quae ab illo</a><span>$12</span></li>
										<li><a href="#">Inventore veritatis et quasi</a><span>$33</span></li>
										<li><a href="#">Architecto beatae vitae</a><span>$78</span></li>
									</ul>
								</div>
							</div>
							<div class="col2 pad_left1">
								<ul class="price">
									<li><a href="#">Sed ut perspiciatis unde</a><span>$15</span></li>
									<li><a href="#">Omnis iste natus error</a><span>$23</span></li>
									<li><a href="#">Sit voluptatem accusantium</a><span>$57</span></li>
									<li><a href="#">Doloremque laudantium</a><span>$47</span></li>
									<li><a href="#">Totam rem aperiam</a><span>$87</span></li>
									<li><a href="#">Eaque ipsa quae ab illo</a><span>$12</span></li>
									<li><a href="#">Inventore veritatis et quasi</a><span>$33</span></li>
									<li><a href="#">Architecto beatae vitae</a><span>$78</span></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
		</article>
<!-- / content -->
	</div>
</div>
<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col1 pad_left1">
						Contáctanos <span>servicio.cliente@correo.com</span></h3>
						
					</section>
					<section class="col2 pad_left1">
						Siguenos</h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon4.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Technorati"><img src="images/icon5.gif" alt=""></a></li>
						</ul>
					</section>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>