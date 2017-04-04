<? 
setcookie("nick",$nick) //use cookie to store user nickname
?> 
<html> 
<title>My Chat Room</title> 
<frameset rows="80%,*"> 
<frame src="display.php" name="chatdisplay"> 
<frame src="speak.php" name="speak"> 
</frameset> 
</html> 