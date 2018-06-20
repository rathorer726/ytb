<?php 
if(!isset($_POST['userinput'])) {
   $input = '';
} else {
   $input = $_POST['userinput'];
}
?>
<form>
    <input type="text" name="user-input"  value="<?php echo $input; ?>"/>
   <input type="submit" value="Submit">
</form>
