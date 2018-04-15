<!--
<html>
<head>
<title>Challenge 24</title>
</head>
<body>
<table border=1>
    <tr>
        <td>client ip</td>
        <td>211.59.183.45</td>
    </tr>
    <tr>
        <td>agent</td>
        <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36 OPR/52.0.2871.40</td>
    </tr>
</table>
<p>
    <hr><center>Wrong IP!</center><hr>




source : index.phps
http://webhacking.kr/challenge/bonus/bonus-4/index.phps
-->

</body>
</html>

<html>
<head>
<title>Challenge 24</title>
</head>
<body>
<?

extract($_SERVER);
extract($_COOKIE);

if(!$REMOTE_ADDR) $REMOTE_ADDR=$_SERVER[REMOTE_ADDR];

$ip=$REMOTE_ADDR;
$agent=$HTTP_USER_AGENT;


if($_COOKIE[REMOTE_ADDR])
{
$ip=str_replace("12","",$ip);
$ip=str_replace("7.","",$ip);
$ip=str_replace("0.","",$ip);
}

echo("<table border=1><tr><td>client ip</td><td>$ip</td></tr><tr><td>agent</td><td>$agent</td></tr></table>");

//127.0.0.1 => 112277..00..00..1
if($ip=="127.0.0.1")
{
@solve();
}

else
{
echo("<p><hr><center>Wrong IP!</center><hr>");
}
?>



<!--

source : index.phps

-->

</body>
</html>