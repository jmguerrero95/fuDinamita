<div id="contenido">
<?php
$cedula=$_POST['cedula'];
$datos = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/cuadrilla.php','uri'=>'urn:cuadrilla',));
//$datos2 = new SoapClient(null,array('location'=>'http://127.0.0.1/servicio_dinamita/empleado.php','uri'=>'urn:empleados',));
$info=$datos->recu_codigo_total();
//$info2=$datos2->recuperar_cedulas();
$aux=count($info);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Dinamita</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Distribuidora y Fumigadora </span>La Dinamita</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-cog fa-lg fa-spin"></em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-sliders"></em> Sistema
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-lock"></em> Permisologia
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-power-off"></em>
									<a href="index.php"><em>&nbsp;</em>Cerrar sesión</a></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Usuario</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscador">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="inicio.php"><em class="fa fa-home">&nbsp;</em> Inicio</a></li>
			<li><a href="clientes.php"><em class="fa fa-user">&nbsp;</em> Clientes</a></li>
			<li class="parent"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-users">&nbsp;</em> Empleados <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="empleados.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Empleados
					</a></li>
					<li><a class="" href="cuadrillas.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Cuadrillas
					</a></li>
				</ul>
			</li>
			<li class="parent"><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-users">&nbsp;</em> Productos <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="productos.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Productos
					</a></li>
					<li><a class="" href="proveedores.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Proveedores
					</a></li>
				</ul>
			</li>
			<!--<li class="active"><a href="productos.php"><em class="fa fa-cart-plus">&nbsp;</em>Productos</a></li>
			<li><a href="proveedores.php"><em class="fa fa-cart-plus">&nbsp;</em>Proveedores</a></li>-->
			<li class="active"><a href="proyectos.php"><em class="fa fa-suitcase">&nbsp;</em> Proyectos</a></li>
			<li><a href="seguridad.php"><em class="fa fa-shield">&nbsp;</em>Seguridad</a></li>
			<li><a href="index.php"><em class="fa fa-power-off">&nbsp;</em>Cerrar sesión</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Proyectos</li>
			</ol>
		</div><!--/.row-->
		<br/><br/><br/>
<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
					<div class="container-fluid center-block">
						<h3 style="color:blue" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Agregar Proyecto</h3>
					<div id="info" class="mdl-cell mdl-cell--12-col" style="display: none"></div>
					<div id="info_parcial" class="table-responsive col-lg-8 col-md-offset-2">
						<table class="table table-hover table-condensed">
									<thead>
										<tr>
											<th class="mdl-data-table__cell--non-numeric">
												Cedula de cliente
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Nombre del proyecto
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Costo
											</th>
										</tr>
									</thead>
									<tbody>
								<form action="../include/agre_proyec.php" method="POST">
									<tr>
										<td class="mdl-data-table__cell--non-numeric">
											<input class="form-control input-sm" size="13" type="text" name="cedula" value="<?php echo($cedula) ?>" readonly>
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<input class="form-control input-sm" size="13" type="text" required name="nombre">
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<input class="form-control input-sm" size="13" type="number" required name="costo">
										</td>
									</tr>
									<tr>
										<th class="mdl-data-table__cell--non-numeric">
												cuadrilla a asignar 
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Direccion 
											</th>
											<th class="mdl-data-table__cell--non-numeric">
												Fecha a realizar 
											</th>
									</tr>
									<tr>
										<td class="mdl-data-table__cell--non-numeric">
											<select class="form-control input-sm" name="cuadrilla">
												<option value="0">Seleccione</option>
										<?php
											for ($i=0; $i < $aux; $i++) { 
												?>
												<option value="<?php echo $info[$i][1] ?>"><?php echo $info[$i][0] ?></option>
												<?php
											}
										?>
											</select>
										</td>
										<td class="mdl-data-table__cell--non-numeric">
											<textarea class="form-control input-sm" rows="1" cols="25" required name="direccion">
											</textarea>
										</td>
										<td>
											<input class="form-control input-sm" type="date" required name="fech_ini">
										</td>
									</tr>
									</tbody>
									</table>
								</br>
									<button type="submit" id="button" class="btn btn-primary">Continuar</button>
								</form>
								<br> 
					</div>
				</div>
				<div align="center"></div>
	    </div>
	  </main>
	</div>
	<script type="text/javascript">
		$("#button").click(function() {
		$("#button").hide(1000);
		$("#nuevo").fadeIn(2000);
		});
		//creo una nueva fila
		/*var fila = $('<tr>'+
		'<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" name="especialidad"></td>'+
		'<td class="mdl-data-table__cell--non-numeric"><input size="13" type="text" name="descripcion"></td>'+
		'<td class="mdl-data-table__cell--non-numeric"><button type="submit" name="guardar">Guardar</button></td>'+
		'</form>'+
		'</tr>').hide().fadeIn(1000);
		//añado fila a la tabla
		$("#tabla").append(fila);
		$("#button").hide(1000)
		});*/
	</script>
	<!--MODALS-->
	<div class="modal fade <?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Integrantes de la cuadrilla</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h3 style="color:blue" class="mdl-cell--hide-phone mdl-cell--hide-tablet">Integrantes de la cuadrilla</h3>

			<table class="table">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">
							Cedula Cliente
						</th>
						<th class="mdl-data-table__cell--non-numeric">
							Cuadrilla 
						</th>
						<th class="mdl-data-table__cell--non-numeric">
							Direccion a fumigar
						</th>
						<th class="mdl-data-table__cell--non-numeric">
							Fecha
						</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
					<input size="13" class="form-control input-sm" type="text" name="rif" value="<?php echo $info[$i][0] ?>">	
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						
					</td>
				</tr>
				</tbody>
			</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--FIN DE MODALS-->
				<!--<div class="col-md-6">
				<div class="panel panel-default articles">
					<div class="panel-heading">
						Latest News
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">30</div>
										<div class="text-muted">Jun</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
						
						<!--<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">28</div>
										<div class="text-muted">Jun</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
						
						<!--<div class="article">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<div class="large">24</div>
										<div class="text-muted">Jun</div>
									</div>
									<div class="col-xs-10 col-md-10">
										<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
					<!--</div>
				</div><!--End .articles-->
				
				<!--<div class="panel panel-default ">
					<div class="panel-heading">
						Progress bars
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="col-md-12 no-padding">
							<div class="row progress-labels">
								<div class="col-sm-6">New Orders</div>
								<div class="col-sm-6" style="text-align: right;">80%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">Comments</div>
								<div class="col-sm-6" style="text-align: right;">60%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-orange" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">New Users</div>
								<div class="col-sm-6" style="text-align: right;">40%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 40%;" class="progress-bar progress-bar-teal" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="row progress-labels">
								<div class="col-sm-6">Page Views</div>
								<div class="col-sm-6" style="text-align: right;">20%</div>
							</div>
							<div class="progress">
								<div data-percentage="0%" style="width: 20%;" class="progress-bar progress-bar-red" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						To-do List
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul class="todo-list">
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-1" />
									<label for="checkbox-1">Make coffee</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-2" />
									<label for="checkbox-2">Check emails</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-3" />
									<label for="checkbox-3">Reply to Jane</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-4" />
									<label for="checkbox-4">Make more coffee</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-5" />
									<label for="checkbox-5">Work on the new design</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-6" />
									<label for="checkbox-6">Get feedback on design</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
						</span></div>
					</div>
				</div>
				<div class="panel panel-default chat">
					<div class="panel-heading">
						Chat
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
							<li class="right clearfix"><span class="chat-img pull-right">
								<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
					</div>
				</div>
			</div><!--/.col-->
			
			<!--<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Calendar
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
				<div class="panel panel-default ">
					<div class="panel-heading">
						Timeline
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">
						<ul class="timeline">
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-pushpin"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-link"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-paperclip"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Contact Form
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<!--<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<!--<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<!--<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<!--<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
			<!--<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>-->
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
