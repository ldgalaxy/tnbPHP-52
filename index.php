<?php

$find = array('Larry', 'Curly', 'Moe');
$replace = array('L***y', 'C***y', 'M*e');

if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
   $user_input = $_POST['user_input'];
   $user_input_lc = strtolower($user_input);
   $user_input_new = str_replace($find, $replace, $user_input_lc);

   echo $user_input_new;
}
?>

<hr>

<form action="index.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
   <input type="submit" value="Submit">
</form>
