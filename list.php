<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Список тестов</title>
    <nav>
        <ul>
            <li><a href="admin.php">Загрузить новый тест</a></li>
            <li><a href="test.php">Пройти тест</a></li>
        </ul>
    </nav>
    </head>
    <body>
        <?php
        $dir = __DIR__ . DIRECTORY_SEPARATOR. "test";
        chdir($dir);
        $filelist = glob("*.json");
        $n = 1;
        foreach ($filelist as $value) 
            {echo "<a href='test.php?test=". $value. "'> Тест ". $n. "</a>";
            $n = $n + 1;
            }
        ?>
    </body>
</html>
