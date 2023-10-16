<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="login_form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css works</title>
</head>
<style>
body
{
    background-color: aqua;    
}
th
{
    width: 190px;
    height: 50px;
}

.text_1
{
    width: 96%;
    height: 79%;
}
.btn
{
    width: 88%;
    height: 65%;
    background-color: blue;
    color: white;
    border-color: white;
}
.btn:hover
{
    background-color:red;
    color: wheat;
}
.text_1:hover
{
    background-color: wheat;    
}
</style>
<script>
    
    function show()
    {
        if(!(document.forms['myform']['s1'].checked))
        {
            alert(document.forms['myform']['s1'].value);
            alert('any one should be selected');
            return false;
        }
    }
</script>
<body>
    <form id="myform" onsubmit="return show()" action="css_html.html">
    <table class="table_class" align="center" >
        <tr>
            <th colspan="2">
                    <h3><i> LOGIN FORM </i></h3>
            </th>
        
        </tr>
        <tr>
            <th>
                    <label>ENTER USERNAME</label>
            </th>
            <th>
                <input type="text" placeholder="enter the username" class="text_1" name="uname" id="uname" required>
        </th>
        
        </tr>
        <tr>
            <th>
                    <label>ENTER PASSWORD</label>
            </th>
            <th>
                <input type="password" placeholder="enter the password" class="text_1" name="pword" id="pword" required>
        </th>
        
        </tr>
        <tr>
            <th>
                    <label>USER TYPE</label>
            </th>
            <th>
                 <input type="radio" id="s1" name="s1">OWNER
                 <input type="radio" id="s2" name="s1">WORKER

        </th>
        
        </tr>
        <tr>
            <th>
                    <input type="submit" class="btn" value="LOGIN">
            </th>
            <th>
                <input type="reset" class="btn"  value="RESET">
            </th>
        
        </tr>
    </table>
</form>
</body>
</html>