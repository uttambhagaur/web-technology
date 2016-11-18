<?php
if(isset($_POST['name'])||isset($_POST['age'])) {
echo $_POST["name"]."<br/>";
echo $_POST["age"];
}
?>
<html>
<head>
<title>php example</title>

</head>
<body>
<form action="" method="post">
<input type="text" name="name" placeholder="Name"> <br/>
<input type="text" name="age" placeholder="Age"><br/>
<input type="submit" value="Submit"/>
    </form>
</body>
</html>