<!doctype html>
<html> 
<head> 
<title>Speak</title> 
</head> 
<body> 
<? 
If ($words) 
{ $link_ID=mysql_connect("tt-trainee.sakura.ne.jp","mysql331.db.sakura.ne.jp"); 
mysql_select_db("tt-trainee_db1"); // abc is the database name 
$time=date(y).date(m).date(d).date(h).date(i).(date(s); //get current time 
$str="INSERT INTO chat(chtime,nick,words) values ('$time','$nick','$words');" ;
mysql_query($str,$link_ID); //save message record into database 
mysql_close($link_ID); ) 
?> 

<form action="speak.php" method="post" target=" _self"> 
<input type="text" name="words" cols="20"> 
<input type="submit" value="Speak"> 
</form> 
</body> 
</html> 