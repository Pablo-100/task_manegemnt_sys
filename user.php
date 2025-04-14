<?php
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> 
</head>
<body>
	<input type="checkbox" id="checkbox">
	<?php include "inc/header.php"; ?>
	<div class="body">
		<?php include "inc/nav.php"; ?>
		<section class="section-1">
        <h4> Manage User  <a href="add_users.php">Add users</a></h4> 
        <table class="table">
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Role</th>  
                <th>Action</th>      
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe</td>
                <td>Admin</td>
                <td>
                    <a href="edit_user.php?id=1" class="edit-btn">Edit</a> 
                    <a href="delete_user.php?id=1"class="delete-btn">Delete</a>
            </td>    
            </tr>
        </table>   
		</section>
	</div>
    <script src="text/javascript">
        var active = document.querySelector("#navList li:nth-child(2)");
        active.classList.add("active");
    </script>
</body>
</html>
<?php 
} else { 
   $em = "First login";
   header("Location: login.php?error=$em");
   exit();
}
?>
