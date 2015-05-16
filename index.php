<?php

$find = array('Larry', 'Curly', 'Moe');
$replace = array('L***y', 'C***y', 'M*e');



if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
   echo $user_input = $_POST['user_input'];
}
?>

<hr>

<form action="index.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
   <input type="submit" value="Submit">
</form>
