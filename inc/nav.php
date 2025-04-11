<nav class="side-bar">
	<div class="user-p">
		<img src="img/users.png">
		<h4>@<?=$_SESSION['username']?></h4>	
	<?php 
        if ($_SESSION['role'] == "employee") { 	
    ?>		
	</div>
	<!-- Employee nav bar --> 
	<ul>
		<li>
			<a href="#">
				<i class="fa fa-tachometer" aria-hidden="true"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fa fa-tasks" aria-hidden="true"></i>
				<span>My Task</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fa fa-user" aria-hidden="true"></i>
				<span>Profile</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span>Notification</span>
			</a>
		</li>				
		<li>
			<a href="logout.php">
				<i class="fa fa-sign-out" aria-hidden="true"></i>
				<span>Logout</span>
			</a>
		</li>
	</ul>
	<?php }else { ?>
	<!-- Admin nav bar -->
	<ul id="navList">
		<li>
			<a href="#">
				<i class="fa fa-tachometer" aria-hidden="true"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<li class="active">
			<a href="user.php">
				<i class="fa fa-users" aria-hidden="true"></i>
     			<span>Manage Users</span>
			</a>
		</li>
		<li>
			<a href="creat_task.php">
				<i class="fa fa-plus" aria-hidden="true"></i>
				<span>Creat Task</span>
			</a>
		</li>
		<li>
			<a href="tasks.php">
				<i class="fa fa-tasks" aria-hidden="true"></i>
				<span>All Tasks</span>
			</a>
		</li>
		<li>
			<a href="notification.php">
				<i class="fa fa-bell" aria-hidden="true"></i>
				<span>Notification</span>
			</a>
		</li>				
		<li>
			<a href="logout.php">
				<i class="fa fa-sign-out" aria-hidden="true"></i>
				<span>Logout</span>
			</a>
		</li>
	</ul>
<?php } ?>
</nav>