
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<style>
*{
    -webkit-box-sizing: border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
}

body {
    margin: 30px;
    font-family: Arial, sans-serif;

}
input, textarea {
    margin:5px;
    width:300px;
}
form {
    display: flex;
    flex-direction:column;
}
</style>
<?php 
include_once("config.php");

?>
<form  method="post" action="">
<input type="text" name="username" placeholder="Ваше имя" required >
<textarea name="comment" cols="30" rows="5" placeholder="Ваш коменнтарий " required></textarea>
<input type="submit" value="Отправить">
</form>
 


<hr>
<h2>Форум</h2>
<?php


if($result = $mysqli->query("SELECT * FROM ".$db_table." ORDER BY date DESC"))
{ if (empty($result->fetch_assoc))
    {
        echo "<h3>Коменнтарии :</h2>";
    while($row = $result->fetch_assoc() )
    {
        echo "<p>".$row['username']." оставил(ла) коменнтарий '".$row['comment']."' : ".$row['date']."</p>";
    }
    }else
    {
        echo "<p>Здесь пока нет коменнтариев :(</p>";
    }
}
?>


</body>
</html> 