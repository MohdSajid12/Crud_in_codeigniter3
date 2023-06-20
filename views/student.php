<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php
      if($this->session->flashdata('message'))
      {
        echo $this->session->flashdata('message');
      }
 ?>

<?php    echo form_open('crud/newUser')  ?>
   
   <label for="">First Name</label>
<?php
  echo form_input('name');
?>


 <label for="">Email</label>
<?php
  echo form_input('email');
?>

<label for="">Password</label>
<?php
  echo form_input('password');
?>

<label for="">Age</label>
<?php
  echo form_input('age');
?>

<?php
  echo form_submit('submit','submit','');
?>
<?php echo form_close() ?>


</body>
</html>