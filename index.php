 
<?php
$text ='';
$hidden ='';

if ($_POST['btn_show']) {
    $text = $_POST['myTextArea']; 
    }
    elseif ($_POST['btn_hide']) {
       	$hidden ='hidden';
       	$text = $_POST['myTextArea']; 
       }
       else{
       		$text = ''; 
       		$hidden = $_POST['btn_clean'];
       }   
?>
<html>
<body>
	<form action="index.php" method="POST">
		
	    <textarea name="myTextArea" <?php echo $hidden ?> ><?php echo $text?></textarea>
	    <button type="submit" name="btn_hide" value="btn_hide">Скрыть</button>
	    <br>
	    <button type="submit" name="btn_show" value="btn_show">Раскрыть</button>
	    <br>
	    <button type="submit" name="btn_clean" value="<?php echo $hidden ?>">Очистить</button>
	</form>
</body>
</html>
<style type="text/css">
	
body {
  padding: 50px;
  font: 14px "Lucida Grande", Helvetica, Arial, sans-serif;
  margin-left: auto;
  margin-right: auto;
  width: 6em;
}

textarea{
  height: 200px;
  width: 200px;
}
button{
  height:30px;
   width: 200px;
 }

</style>
