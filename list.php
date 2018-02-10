<!DOCTYPE html>C:\xampp
<html>
    <head>
        <meta charset="UTF-8">
        <title>Загрузка файла с тестом</title>
    <nav>
        <ul>
            <li><a href="list.php">Список тестов</a></li>
            <li><a href="test.php">Пройти тест</a></li>
        </ul>
    </nav>
    </head>
    <body>
        <?php
        $uploads_dir = '/test';
        var_dump($_FILES);
        if (isset($_FILES['myfile']['name']) && !empty($_FILES['myfile']['name'])){
            if ($_FILES['myfile']['error'] == UPLOAD_ERR_OK &&
                move_uploaded_file($_FILES['myfile']['tmp_name'], $uploads_dir/$_FILES['myfile']['name'])){
                echo "<p>Файл с тестами загружен</p>";
            }
            else {
                echo "<p>Ошибка: файл с тестами не загружен<p>";
            }
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            Файл <input type="file" name="myfile">
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>
