
<?php
if (empty($_GET['name']))
{
    ?>
    <form action="" method="GET">
    <input type="text" placeholder="Введіть своє ім'я" name="name" value="<?php echo $_REQUEST['name'];?>"><br><br>
    <input type="text" placeholder="Введіть свій вік" name="age" ><br><br>
        <textarea name="message" placeholder="Введіть текст ">

        </textarea><br><br>

    <input type="submit">
</form>

<?php
}
if(isset($_GET['name'])) {

    $name = strip_tags($_GET['name']);
    $age = strip_tags($_GET['age']);
    $message = strip_tags($_GET['message']);
    echo 'Привіт, '.$name.' '.$age.' лет.<br>';
    echo 'Твоє повідомлення: '.$message;
}

//?>
