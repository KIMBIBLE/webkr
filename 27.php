<html>
<head>
<title>Challenge 27</title>
</head>
<body>
<h1>SQL INJECTION</h1>
<form method=get action=index.php>
<input type=text name=no><input type=submit>
</form>
<?
if($_GET[no])
{

if(eregi("#|union|from|challenge|select|\(|\t|/|limit|=|0x",$_GET[no])) exit("no hack");

// @ : @ 이후의 statement에 대한 오류 출력을 하지 않겠다는 의미
// "select id from challenge27_table where id='guest' and no=($_GET[no])"
// QUERY TO INJECT  : 0) or no like 2 -- 
// ("select id from challenge27_table where id='guest' and no=(0) or no like 2 -- "

$q=@mysql_fetch_array(
    mysql_query(
        "select id from challenge27_table where id='guest' and no=($_GET[no])")
        ) or die("query error");

if($q[id]=="guest") echo("guest");
if($q[id]=="admin") @solve();

}


?>
<!-- index.phps -->
</body>
</html>

