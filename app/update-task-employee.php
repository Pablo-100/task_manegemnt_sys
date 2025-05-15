<?php 
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id'])) {

if (isset($_POST['id']) && isset($_POST['status']) && $_SESSION['role'] == 'employee') {
	include "../DB_connection.php";

    function validate_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$status = validate_input($_POST['status']);
	$id = validate_input($_POST['id']);

	if (empty($status)) {
		$em = "status is required";
	    header("Location: ../edit-task-employee.php?error=$em&id=$id");
	    exit();
	}else {
    
       include "Model/Task.php";
       // Include the Notification model to create notifications
       include "Model/Notification.php";
       // Include the User model to get admin information
       include "Model/User.php";

       $data = array($status, $id);
       update_task_status($conn, $data);

       // Check if the task status is set to completed
       if ($status == "completed") {
           // Get the task details to include in notification
           $task = get_task_by_id($conn, $id);
           
           // Query to get all admin users
           $sql = "SELECT id FROM users WHERE role = 'admin'";
           $stmt = $conn->prepare($sql);
           $stmt->execute();
           
           // If there are admin users
           if ($stmt->rowCount() > 0) {
               $admins = $stmt->fetchAll();
               
               // Get the employee name who completed the task
               $employee = get_user_by_id($conn, $_SESSION['id']);
               $employee_name = $employee['full_name'];
               
               // Create notification message
               $message = "Task '$task[title]' has been completed by $employee_name";
               
               // Send notification to each admin
               foreach ($admins as $admin) {
                   $notification_data = array($message, $admin['id'], 'task_completed');
                   insert_notification($conn, $notification_data);
               }
           }
       }

       $em = "Task updated successfully";
	    header("Location: ../edit-task-employee.php?success=$em&id=$id");
	    exit();

    
	}
}else {
   $em = "Unknown error occurred";
   header("Location: ../edit-task-employee.php?error=$em");
   exit();
}

}else{ 
   $em = "First login";
   header("Location: ../login.php?error=$em");
   exit();
}