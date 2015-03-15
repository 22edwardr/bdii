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
			<div id="campos">
			<center><table id="formul"></center>
		<form method="POST" action= "Registrar_estudiante.php">
		<TR class="campos">
			<TH COLSPAN="2"><br>Ingrese los datos del estudiante a registrar</TH>
		</TR>
		<TR>
			<TD><br><H3>Codigo *</H2></TD>
			<TD><br><input type="text" name="Codigo" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
		<TR>
			<TD><H3>Nombre 1 *<br></TD><br>
			<TD><input type="text" name="Nombre1" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
			<TD><H3>Nombre 2<br></TD><br>
			<TD><input type="text" name="Nombre2" value="" size="20" maxlength="9"></TD>
		</TR>
		<TR>
			<TD><H3>Apellido 1 *<br></TD>
			<TD><input type="text" name="Apellido1" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
			<TD><H3>Apellido 2<br></TD>
			<TD><input type="text" name="Apellido2" value="" size="20" maxlength="9"></TD>
		</TR>
		<TR>
			<TD><H3>Tipo de documento *<br></TD>
			<TD><select name="Tipo_documento" required>
					<option value="CC" checked>
						Cedula de ciudadania
					</option>	
					<option value="TI">
						Tarjeta de identidad
					</option>
				</select>	
			</TD>
		</TR>
		<TR>
			<TD><H3>Numero de documento *<br></TD>
			<TD><input type="text" name="Numero_documento" value="" size="20" maxlength="15" required></TD>
		</TR>
		<TR>
			<TD><H3>Telefono *<br></TD>
			<TD><input type="text" name="tel0" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
		



		<TR>
			<TD><H3>Direccion de residencia *<br></TD>
			<TD><input type="text" name="dir0" value="" size="20" maxlength="9" required></TD>
		</TR>
		<TR>
		




		<TR>
			<TD><H3>Email *<br></TD>
			<TD><input type="text" name="mail0" value="" size="20" maxlength="9" required></TD>
		</TR>
<!--

		<tr id="emailNode">
<td colspan="2"><CENTER id="mailManagment"><A HREF="javascript:newMail();">Agregar otro mail</A>&nbsp;</CENTER></td></tr>

-->

		<TR>
			<TD><H3>Semestre<br></TD>
			<TD><input type="text" name="Semestre" value="" size="20" maxlength="9" required></TD>
		</TR>



		<TR>
			<TD><H3>Semestre *<br></TD>
			<TD><select name="Carrera" required>
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
				</select>	
			</TD>
		</TR>





		<TR>
			<TH COLSPAN="2"><H3>Los valores con "*" son de caracter obligatorio<br></TH>
		</TR>
		<TR class="boton">
			<TD  align="center"COLSPAN="2"><br><input type="submit" name="enviar" value="Ingresar"><br></TD>
		</TR>
</TABLE>
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
						<h3>Contáctanos <span>servicio.cliente@correo.com</span></h3>
						
					</section>
					<section class="col2 pad_left1">
						<h3>Siguenos</h3>
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