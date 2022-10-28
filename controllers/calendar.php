<?php
session_start();
// If the  not logged redirect to index...

if (!isset($_SESSION['loggedin'])) {
	header('Location: .././index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<?php include '.././view/head.php'; ?>

<body>

<div>
<?php include '.././view/navbar.php'; ?>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
        
      </div>
   </div>
 

</div>

</body>

</html>