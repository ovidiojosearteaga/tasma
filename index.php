<!DOCTYPE html>
<html>
<head>
	<title>Tasma, Task Manager</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/styles.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="logo" class="col s12">
				<hgroup>
					<h1>TASMA</h1>
					<h2>Task Manager, for productive people.</h2>
				</hgroup>
			</div>
		</div>

		<div class="row" id="add-new">
			<div class="col s12">
				<a class="waves-effect waves-light btn-large center-align green">
					<i class="material-icons left">add</i>
					<span>Add new task</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<div class="card blue">
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab"><a href="#active" class="active">Tasks active</a></li>
							<li class="tab"><a href="#not-active">Tasks not Active</a></li>
						</ul>
					</div>

					<div class="card-content">
						<div id="active">
							<p>Lista de elementos activos.</p>
						</div>
						<div id="not-active">
							<p>Lista de elementos no activos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>