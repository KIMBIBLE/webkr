/*
<html> 
<head> 
<title>Challenge 26</title> 
<style type="text/css"> 
body { background:black; color:white; font-size:10pt; }     
a { color:lightgreen; } 
</style> 
</head> 
<body> 

<? 

if(eregi("admin",$_GET[id])) { echo("<p>no!"); exit(); } 

$_GET[id]=urldecode($_GET[id]); 

if($_GET[id]=="admin") 
{ 
@solve(26,100); 
} 

?> 


<br><br> 
<a href=index.phps>index.phps</a> 
</body> 
</html> 
*/

function toHex(s) {
    // utf8 to latin1
    var s = unescape(encodeURIComponent(s))
    var h = ''
    for (var i = 0; i < s.length; i++) {
        h += '%'+s.charCodeAt(i).toString(16)
    }
    return h
}

function fromHex(h) {
    var s = ''
    for (var i = 0; i < h.length; i+=2) {
        s += String.fromCharCode(parseInt(h.substr(i, 2), 16))
    }
    return decodeURIComponent(escape(s))
}

toHex(toHex('admin'));