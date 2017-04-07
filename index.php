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

<nav>
	<div class="nav-wrapper green row">
		<div class="col s12">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
					<a href="#" class="">Home</a>
				</li>
				<li>
					<a href="#" class="">My Account</a>
				</li>
				<li>
					<a href="#" class="">Loggin</a>
				</li>
				<li>
					<a href="#" class="">Sign up</a>
				</li>
			</ul>
		</div>
	</div>	
</nav>

	<div class="container">

		<div class="row">
			<div id="logo" class="col s12">
				<hgroup>
					<h1 class="green-text center-align">TASMA</h1>
					<h2 class="center-align">Task Manager, for productive people.</h2>
				</hgroup>
			</div>
		</div>

		<div class="row" id="add-new">
			<div class="col s12">
				<a class="waves-effect waves-light btn-large center-align green" href="#modal-add-task">
					<i class="material-icons left">add</i>
					<span>Add new task</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab"><a href="#active" class="active green-text">Tasks active</a></li>
							<li class="tab"><a href="#not-active" class="green-text">Tasks not Active</a></li>
							<div class="indicator green"></div>
						</ul>
					</div>

					<div class="card-content">
						<div id="active">
							<table class="bordered striped responsive-table">
								<thead>
									<tr>
										<th></th>
										<th>Task Name</th>
										<th>Priority</th>
										<th>Create Date</th>
										<th>Expiration Date</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#" class="green-text text-lighten-1">
											<i class="material-icons">assignment_turned_in</i>
											</a>
										</td>
										<td>Name example one</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
										<td>
											<a href="#" class="red-text text-lighten-4">
											<i class="material-icons center">delete</i>
											</a>
										</td>
									</tr>

									<tr>
										<td>
											<a href="#" class="green-text text-lighten-1">
											<i class="material-icons">assignment_turned_in</i>
											</a>
										</td>
										<td>Name example two</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
										<td>
											<a href="#" class="red-text text-lighten-4">
											<i class="material-icons center">delete</i>
											</a>
										</td>
									</tr>

									<tr>
										<td>
											<a href="#" class="green-text text-lighten-1">
											<i class="material-icons">assignment_turned_in</i>
											</a>
										</td>
										<td>Name example three</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
										<td>
											<a href="#" class="red-text text-lighten-4">
											<i class="material-icons center">delete</i>
											</a>
										</td>
									</tr>

									<tr>
										<td>
											<a href="#" class="green-text text-lighten-1">
											<i class="material-icons">assignment_turned_in</i>
											</a>
										</td>
										<td>Name example four</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
										<td>
											<a href="#" class="red-text text-lighten-4">
											<i class="material-icons center">delete</i>
											</a>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
						<div id="not-active">
							<table class="bordered striped responsive-table">
								<thead>
									<tr>
										<th>Task Name</th>
										<th>Done / Not Done</th>
										<th>Priority</th>
										<th>Create Date</th>
										<th>Date of realization</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Name example one</td>
										<td class="green-text"><i class="material-icons left-align">thumb_up</i>
										</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
									</tr>

									<tr>
										<td>Name example two</td>
										<td class="green-text"><i class="material-icons left-align">thumb_up</i>
										</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
									</tr>

									<tr>
										<td>Name example three</td>
										<td class="red-text text-lighten-4"><i class="material-icons left-align">thumb_down</i>
										</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
									</tr>

									<tr>
										<td>Name example four</td>
										<td class="green-text"><i class="material-icons left-align">thumb_up</i>
										</td>
										<td>Medium</td>
										<td>07 April, 2017</td>
										<td>07 April, 2017</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="modal-add-task" class="modal">
		<div class="modal-content">
			<h4>Add new task</h4>
			<div class="row">
				<form>
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="Name of Task" name="name-of-task" id="name-of-task" type="text" class="validate">
							<label for="name-of-task">Name of Task</label>
						</div>
					</div>	
					<div class="row">
						<div class="input-field col s12">
							<select>
								<option value="" disabled selected>Choose priority</option>
								<option value="hight">Hight</option>
								<option value="medium">Medium</option>
								<option value="low">Low</option>
							</select>
							<label>Indicates priority</label>
						</div>
					</div>
					<div class="input-field col s12">
						<input type="date" class="datepicker" id="expiration-date" placeholder="4 April, 2017">
						<label for="expiration-date">
Expiration date</label>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save task</a>
		</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
</body>
</html>