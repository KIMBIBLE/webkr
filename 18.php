<html> 
<head> 
<title>Challenge 18</title> 
<style type="text/css"> 
body { background:black; color:white; font-size:10pt; } 
input { background:silver; } 
a { color:lightgreen; } 
</style> 
</head> 
<body> 
<br><br> 
<center><h1>SQL INJECTION</h1> 
<form method=get action=index.php> 
<table border=0 align=center cellpadding=10 cellspacing=0> 
<tr><td><input type=text name=no></td><td><input type=submit></td></tr> 
</table> 
</form> 
<a style=background:gray;color:black;width:100;font-size:9pt;><b>RESULT</b><br> 
<? 
if($_GET[no]) 
{ 

// filtering ' ', '/', '(', ')', '\t', '|' '&', 'union', 'select', 'from' '0x'
if(eregi(" |/|\(|\)|\t|\||&|union|select|from|0x",$_GET[no])) exit("no hack"); 

$q=@mysql_fetch_array(mysql_query("select id from challenge18_table where id='guest' and no=$_GET[no]")); 
//http://webhacking.kr/challenge/web/web-32/index.php?no=0%0aor%0a1%0aLIMIT%0a1,1
if($q[0]=="guest") echo ("hi guest"); 
if($q[0]=="admin") 
{ 
@solve(); 
echo ("hi admin!"); 
} 

} 

?> 
</a> 
<br><br><a href=index.phps>index.phps</a> 
</cener> 
</body> 
</html> 