
<html>
<head>
 <title>Запись в БД через форму на php</title>
</head>
<body>
 <form method="post" action="">
  <input name="name" type="text" placeholder="Имя"/>
  <input name="tex2t" type="text" placeholder="Текст"/>
  <textarea name="text" cols="30" rows="5" placeholder="Ваш коменнтарий"></textarea>
  <input type="submit" value="Отправить"/>
 </form>
</body>
</html>

<?php 
require_once("conf.php");

?>