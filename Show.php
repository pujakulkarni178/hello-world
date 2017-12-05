<?php
include 'Connection.php';
include 'User.php';
include 'ViewUser.php';
?>
<html>
<body>
<?php
$users=new ViewUser();
$users->ShowallUsers();
?>
</body>
</html>