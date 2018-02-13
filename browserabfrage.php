<!DOCTYPE html>
<html>
<head>
       <title>ajax request</title>
</head>

<body>
        <h1></h1>

<script>
function ajaxRequest()
{
try // Non IE Browser?
{ // Yes
var request = new XMLHttpRequest()
}
catch(e1)
{
try // IE 6+?
{ // Yes
request = new ActiveXObject("Msxml2.XMLHTTP")
}
catch(e2)
{
try // IE 5?
{ // Yes
request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch(e3) // There is no AJAX Support
{
request = false
}
}
}
return request
}
</script>

</body>
</html>